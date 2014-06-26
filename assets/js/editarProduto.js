$(document).ready(function(){
	$('#produtoEditar').attr("disabled", true);
	$('#produtoEditar').css("color", "#000");
});

function actions(){
	$('#voltar').click(function(){
		parent.location = "http://localhost/programacao/index.php/home";
	});
	
	$('#buscar').click(function(){
		
		
     	 if($('#nomeProduto').val() == "")
         {             
             $('#nome').val("");
			 $('#preco').val("");
			 alert("Preencha o campo de busca.")
         }
    	
 	     else
 	     {		
			var produto = {};
		
		
			produto.nome = $("#nomeProduto").val();
					
		
		    var nomeProduto = JSON.stringify(produto);
		
		
			$.post("http://localhost/programacao/index.php/buscarProduto/buscar", {'nomeProduto':nomeProduto}, function(retorno){								
				retorno = $.parseJSON(retorno);
				if(retorno.MSG)
				{
					$('#nome').val("");
					$('#preco').val("");
					alert(retorno.MSG);
				}	
				else {
					$('#nome').val(retorno.nome);
					$('#produtoEditar').val(retorno.nome);
					$('#preco').val(retorno.preco);
				}														
								
			});
		
		 }
		
	});
	
	$('#atualizar').click(function(){
		
		if($('#produtoEditar').val() == "")
        {             	             				
			 alert("Busque um produto primeiro.");
        }
        else
        {
        	if(($('#nome').val() == "")||($('#preco').val() == ""))
	        {             	             				
				 alert("Digite o novo valor.");
	        }
        	else
        	{
	        	var produto = {};
	        	
	        	produto.novoNome = $('#nome').val();
	        	produto.novoPreco = $('#preco').val();
	        	produto.nome = $('#produtoEditar').val();
	        	
	        	var novoProduto = JSON.stringify(produto);
	        	
	        	$.post("http://localhost/programacao/index.php/editarProduto/editar", {'novoProduto':novoProduto}, function(retorno){
	        		
	        		retorno = $.parseJSON(retorno);
					$('#nome').val("");
					$('#preco').val("");
					$('#produtoEditar').val("");
					alert(retorno.MSG);
	        		
	        	});
        	}
        }
		
		
	});	
	
}

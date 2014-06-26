$(document).ready(function(){
	$('#nome').attr("disabled", true);
	$('#preco').attr("disabled", true);
	$('#quantidade').attr("disabled", true);
	
	$('#nome').css("color", "#000");
	$('#preco').css("color", "#000");
	$('#quantidade').css("color", "#000");
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
			 $('#quantidade').val("");
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
					$('#quantidade').val("");
					alert(retorno.MSG);
				}	
				else {
					$('#nome').val(retorno.nome);
					$('#preco').val(retorno.preco);
					$('#quantidade').val(retorno.quantidade);	
				}														
								
			});
		
		 }
		
	});
	
	$('#excluirProduto').click(function(){
		
			if($('#nome').val() == "")
	        {             	             				
				 alert("Busque um produto primeiro.");
	        }
			else
			{		
				var produto = {};
						
				produto.nome = $("#nomeProduto").val();					
			
			    var nomeProduto = JSON.stringify(produto);
			
			
				$.post("http://localhost/programacao/index.php/excluirProduto/excluir", {'nomeProduto':nomeProduto}, function(retorno){								
					
					retorno = $.parseJSON(retorno);
					$('#nome').val("");
					$('#preco').val("");
					$('#quantidade').val("");
					alert(retorno.MSG);
																																																	
				});
			}				  
			
	});
	
}

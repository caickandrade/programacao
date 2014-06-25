$(document).ready(function(){
	
});

function actions(){
	
	$('#voltar').click(function(){
		parent.location = "http://localhost/programacao/index.php/home";		
	});
	
	$('#cadastrar').click(function(){
		
		var produto = {};
		
		
		produto.nome = $("#nome").val();
		produto.preco = $("#preco").val();
		
		console.log(produto);
		
		var novoProduto = JSON.stringify(produto);
		
		
		$.post("http://localhost/programacao/index.php/novoProduto/save", {'novoProduto':novoProduto}, function(retorno){								
			retorno = $.parseJSON(retorno);			
			alert(retorno.MSG);				
		});
		
		
	});
	
	
}

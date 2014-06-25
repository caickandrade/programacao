$(document).ready(function(){
	actions();
});

function actions(){
	
	$('#voltar').click(function(){
		parent.location = "http://localhost/programacao/index.php/home";
		console.log("teste");
	});
	
	$('#cadastrar').click(function(){
		
		var produto = {};
		
		
		produto.nome = $("#nome").val();
		produto.preco = $("#preco").val();
		
		var novoProduto = JSON.stringify(produto);
		
		
		$.post("http://localhost/programacao/index.php/novoProduto/save", {'novoProduto':novoProduto}, function(retorno){
			console.log(retorno);
		});
		
		
	});
	
	
}

$(document).ready(function(){
	actions();
});

function actions(){
	
	$('#novo').click(function(){
		parent.location = "http://localhost/programacao/index.php/novoProduto";		
	});
	
	$('#editar').click(function(){
		parent.location = "http://localhost/programacao/index.php/editarProduto";		
	});
	
	$('#excluir').click(function(){
		parent.location = "http://localhost/programacao/index.php/excluirProduto";		
	});
}

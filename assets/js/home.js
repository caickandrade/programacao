$(document).ready(function(){
	actions();
});

function actions(){
	$('#novo').click(function(){
		parent.location = "http://localhost/programacao/index.php/novoProduto";
		console.log("teste");
	});
}

$(document).ready(function(){
	actions();
});

function actions(){
	$('#voltar').click(function(){
		parent.location = "http://localhost/programacao/index.php/home";
		console.log("teste");
	});
}

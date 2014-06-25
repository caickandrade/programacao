<?php 

class Produto extends DataMapper {

	var $table = "produtos";
	//var $has_one = array("address");

	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
	
	function verificarProduto($nome)
	{
		$validar = new User();
		
		$validar->where('nome', $nome)->get();
		
		if($validar->exists())
			return TRUE;
		else
			return FALSE;	
	}
	
	function cadastrarProduto($produto)
	{
		$novoProduto = new Produto();
		
		$novoProduto->nome = $produto->nome;
		$novoProduto->preco = $produto->preco;
		$novoProduto->quantidade = 0;
		
		$novoProduto->save();
	}
	
		
}

/* End of file user.php */
/* Location: ./application/models/produto.php */
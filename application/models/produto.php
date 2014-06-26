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
		$validar = new Produto();
		
		$validar->where('nome', $nome)->get();
		
		if($validar->exists())
			return TRUE;
		else
			return FALSE;	
	}
	
	function buscarProduto($nome)
	{
		$produto = new Produto();
		
		$produto->where('nome', $nome)->get();
		
		return $produto;
	}
	
	function cadastrarProduto($produto)
	{
		$novoProduto = new Produto();
		
		$novoProduto->nome = $produto->nome;
		$novoProduto->preco = $produto->preco;
		$novoProduto->quantidade = 0;
		
		$novoProduto->save();
	}
	
	function excluirProduto ($nome)
	{
		$produto = new Produto();
		
		$produto->where('nome', $nome)->get();
		
		if($produto->delete())
			return TRUE;
		else
			return FALSE;		
	}
	
	function editarProduto($novoProduto, $nome)
	{
		$produto = new Produto();
		
		if($produto->where('nome', $nome)->update(array('nome'=> $novoProduto->novoNome, 'preco'=>$novoProduto->novoPreco)))
			return TRUE;
		else
			return FALSE;
		
	}
	
	public function retornarTodosProdutos()
	{
		$produtos = new Produto();
		$produtos->get();
		
		$result = array();
		
		foreach($produtos as $produto)
		{		
			array_push($result, $produto);
		}
		  
		return $result;  		  		  		  		 		  
		  
	}
		
}

/* End of file user.php */
/* Location: ./application/models/produto.php */
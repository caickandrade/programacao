<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BuscarProduto extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('home');
	}
	
	public function buscar()
	{
		$produto = json_decode($_POST['nomeProduto']);
		
		$buscaProduto = new Produto();			
		
		if($buscaProduto->verificarProduto($produto->nome))
		{
			$busca = $buscaProduto->buscarProduto($produto->nome);
			
			$response = array
			(
				"nome"=> $busca->nome,
				"preco"=> $busca->preco,
				"quantidade"=> $busca->quantidade
			);
			
		}
		else 
		{
			$response = array
			(
				"MSG"=>"Produto não existe."
			);		
		}				
		
		echo json_encode($response);
		
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NovoProduto extends CI_Controller {

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
		$this->load->view('novoProduto');
	}
	
	public function save()
	{		
		
		$produto = json_decode($_POST['novoProduto']);
				
		$novoProduto = new Produto();
		
		$this->load->model('ValidacaoUtil');
		
		//$retornoValidacaoProduto = $this->ValidacaoUtil->validaCamposProduto($produto);
		
		if($this->ValidacaoUtil->validaCamposProduto($produto))
		{
			$response = array
			(
				"MSG"=>"Campos obrigatórios não preenchidos."
			);
		}
		else if($novoProduto->verificarProduto($produto->nome))
			 {
				$response = array
				(
					"MSG"=>"Produto já cadastrado."
				);	 	
			 }
			else
			{
				$novoProduto->cadastrarProduto($produto);
				
				$response = array
				(
					"MSG"=>"Produto cadastrado com sucesso!"
				);
								
			}	
		

		echo json_encode($response);																		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
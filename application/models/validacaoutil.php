<?php

class ValidacaoUtil extends CI_Model 
{
		
	function isBlank($campo)
	{
		$campoBlank = trim($campo);
		
		if(empty($campoBlank))
			return TRUE;
		else 
			return FALSE;
		
	}
	
	function validaCamposProduto($produto)
	{
		if(($this->isBlank($produto->nome)) || ($this->isBlank($produto->preco)))
			return TRUE;
		else
			return FALSE;	
	}

}

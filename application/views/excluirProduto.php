<?php $this->load->view('header') ?>	

</head>

<body>

	<h2>Excluir Produto</h2>							
			
			<label name="buscar">Digite o nome do produto:</label>
			<input type="text" id="nomeProduto" />
			<button id="buscar">Buscar</button>
				
		<br />	
		<br />
		<br />			
		<fieldset>
			
			<label name="nome">Nome do produto: </label>
			<input type="text" class="cadastro" id="nome" placeholder="Nome do produto" />
			
			<br />
			<br />
			<label name="preco">Preço: </label>                                  
			<input type="text" class="cadastro" id="preco" placeholder="Preco" />
			
			<br />
			<br />
			<label name="preco">Quantidade já vendidos: </label>                                  
			<input type="text" class="cadastro" id="quantidade" placeholder="Quantidade" />
			
		</fieldset>
		
		<br />
		<br />
		<button id="excluirProduto">Excluir</button>
		<button id="voltar">Voltar</button>
	
	
	<script src = "<?php echo base_url('/assets/js/excluirProduto.js')?>"></script>
		
</body>

</html>
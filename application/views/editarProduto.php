<?php $this->load->view('header') ?>	

</head>

<body>

	<h2>Editar Produto</h2>							
			
			<label name="buscar">Digite o nome do produto:</label>
			<input type="text" id="nomeProduto" />
			<button id="buscar">Buscar</button>
				
		<br />	
		<br />
		Produto a ser editado:
		<input type="text" id="produtoEditar" />		
		<br />			
		<br />
		<fieldset>
			
			<label name="nome">Nome do produto: </label>
			<input type="text" class="cadastro" id="nome" placeholder="Nome do produto" />
			
			<br />
			<br />
			<label name="preco">Preço: </label>                                  
			<input type="text" class="cadastro" id="preco" placeholder="Preco" />
			
		</fieldset>
		
		<br />
		<br />
		<button id="atualizar">Salvar</button>
		<button id="voltar">Voltar</button>
	
	
	<script src = "<?php echo base_url('/assets/js/editarProduto.js')?>"></script>
		
</body>

</html>
<?php $this->load->view('header') ?>	

</head>

<body>

	<h2>Novo Produto</h2>
		
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
		<button id="cadastrar">Cadastrar</button>
		<button id="voltar">Voltar</button>
	
	
	<script src = "<?php echo base_url('/assets/js/novoProduto.js')?>"></script>
		
</body>

</html>
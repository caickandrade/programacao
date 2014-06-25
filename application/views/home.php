<?php $this->load->view('header') ?>	

	<h2>Tabela de produtos</h2>	
	
	<table border="1">
		<thead>	
			<tr align="center" height="30">			
				<th width='100'>Nome</th>				
				<th width='80'>Preço</th>
				<th>Vendidos</th>
			</tr>
		</thead>
		
		<tbody>
			
			<?php if(isset($produtos)){?>
										
				<?php foreach($produtos as $produto) { ?>
					<tr>
						<td><?php echo $produto->nome ?></td>
						<td>R$ <?php echo $produto->preco ?></td>
						<td><?php echo $produto->quantidade ?></td>												
					</tr>
				<?php } ?>
				
			<?php } ?>
			
				
		</tbody>
		
	</table>
	
	<br />
	<button id="novo">Novo produto</button>
	<button id="excluir">Excluir produto</button>
	<button id="editar">Editar produto</button>
	
	<br />
	<p>Caixa: R$0,00</p>	
</body>

</html>
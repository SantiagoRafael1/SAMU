<div class="row container">
	<div class="col s12">
		<h3 class="light">Página de consulta</h3>
	</div>

	<!-- 6 - preparação cadastro e consulta -->
	<!-- <div class="col s12">
		<?php foreach($consulta as $registro) { ?>
		<p>
			Nome: <?php echo $registro['nome'] ?><br>
			Email: <?php echo $registro['email'] ?>
		</p>
		<?php } ?>
	</div> -->

	<!-- 7 - ajustando layout -->
	<div class="col s12">

		<table>

			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Ações</th>
			</tr>

			<?php foreach($consulta as $registro) { ?>
			<tr>
				<td><?php echo $registro['nome'] ?></td>
				<td><?php echo $registro['email'] ?></td>
				<td>
					<!-- <a href="?router=Site/editar/&id=<?php echo $registro['id'] ?>">Editar</a> | 
					<a href="?router=Site/deletar/&id=<?php echo $registro['id'] ?>">Deletar</a> -->

					<!-- 11 - Criptografar -->
					<a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id']) ?>">Editar</a> | 
					<a href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registro['id']) ?>" class=	"red-text">Deletar</a>
				</td>
			</tr>
			<?php } ?>
		
		</table>
	</div>
</div>
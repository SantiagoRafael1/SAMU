<!-- 1 - Criação formulário de Cadastro -->
<div class="row container">
	<div class="col s12">
		<h3 class="light">Cadastro de usuários</h3>
	</div>

	<div class="col s12">
		<form action="?router=site/cadastro/" method="post">

			<div class="input-field col s12 m6">
				<input type="text" name="nome" id="nome" required>
				<label for="nome">Digite seu nome</label>
			</div>

			<div class="input-field col s12 m6">
				<input type="email" name="email" id="email" required>
				<label for="email">Digite seu email</label>
			</div>

			<!-- Comentar a estrutura tel -->
			<!-- <div class="input-field col s12">
				<input type="tel" name="tel" id="tel" required>
				<label for="tel">Digite seu telefone</label>
			</div> -->

			<div class="input-field col s12">
				<input type="submit" value="Cadastrar" class="btn-small">
				<input type="reset" value="Limpar" class="btn-small red">
			</div>

		</form>
	</div>
</div>
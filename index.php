<?php require 'cadastro.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de cadastro</title>
</head>
<body>
	
	<h1>Formulário de cadastro</h1>

	<form method="POST" action="cadastro.php">
		<section>
			<label>Nome:</label>
			<input type="text" name="nome">

			<br>

			<label>Sobrenome:</label>
			<input type="text" name="sobrenome">

			<br>

			<label>Data de Nascimento:</label>
			<input type="date" name="nascimento">

			<br>

			<label>Telefone:</label>
			<input type="text" name="telefone">

			<br>

			<label>E-mail:</label>
			<input type="email" name="email">

			<br>		
		</section>

		<h3>Endereço</h3>
		
		<section>
			<label>Rua:</label>
			<input type="text" name="rua">

			<br>

			<label>Nº:</label>
			<input type="number" name="numero">

			<br>

			<label>Bairro:</label>
			<input type="text" name="bairro">

			<br>

			<label>Cidade:</label>
			<input type="text" name="cidade">

			<br>

			<label>Estado:</label>
			<input type="text" name="estado">

			<br>

			<label>País:</label>
			<input type="text" name="pais">

			<br>
		</section>

		<br>

		<input type="submit" name="cadastrar" value="Enviar">
	</form>
</body>
</html>
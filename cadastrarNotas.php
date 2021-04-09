<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale-1.0">
<title>Login</title>

<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<form class="form" action="model/notasControl.php" method="POST">
		<input type="hidden" name="formulario" value="cadastrar">
		<div class="card">
			<div class="card-top">
				<h2 class="title">Nova Nota</h2>
			</div>

			<div class="card-group">
				<label>Título</label> <input type="text" name="titulo"
					placeholder="Digite o título da Nota">
			</div>

			<div class="card-group">
				<label>Conteúdo</label>
				<textarea rows="3" name="conteudo"></textarea>
			</div>

			<div class="card-group btn">
				<button type="submit">SALVAR</button>
			</div>


		</div>
	</form>
</body>
</html>
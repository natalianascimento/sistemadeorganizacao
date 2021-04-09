<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale-1.0">
<title>Notas</title>

<link rel="stylesheet" href="css/style2.css">

</head>
<body>
	<h2 class="title">Seja bem-vindo!</h2>
	<button class="button" type="button"
		onclick="window.location.href='cadastrarNotas.php'">NOVA NOTA</button>
	<br>
	
    <?php
    include_once 'model/notasControl.php';
    $dados = consultarNotas();
    foreach ($dados as $item) {
    ?>
    <div class="post">
		<div class="postit">
			<h3 class="title"><?php echo $item->getId_nota()." - ".$item->getTitulo()."<br>";?></h3>
			<p><?php echo $item->getConteudo()."<br><br>";?></p>
			<a class="button" href="model/notasControl.php?id=<?php echo $item->getId_nota()?>">Editar</a>
		</div>
	</div>
	<?php }?>

</body>
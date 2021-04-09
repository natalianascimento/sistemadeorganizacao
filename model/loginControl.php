<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require_once 'loginValidacao.php';
$acesso = loginValidacao($usuario,$senha);
echo "Resultado: $acesso";

if ($acesso ==1){
    $_SESSION ['usuario'] = $usuario;
    header ('Location: ../consultarNotas.php');
    exit();
} else{
    header ("Location: ../index.php");
    exit();
}

<?php 
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require_once 'loginValidacao.php';
$loginValidacao = loginValidacao($usuario,$senha);
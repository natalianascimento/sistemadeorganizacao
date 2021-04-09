<?php

function loginValidacao(&$usuario, &$senha)
{
    if (empty($usuario) || empty($senha)) {

        header('Location: ../index.php');
    } else {

        require_once 'autenticacaoDAO.php';
        $conexaoBanco = new autenticacaoDAO();
        $acessar = $conexaoBanco->login($usuario, $senha);
        return $acessar;
    }
}

// $usuario = "natalia";
// $senha = 123;
// loginValidacao($usuario, $senha);

?>
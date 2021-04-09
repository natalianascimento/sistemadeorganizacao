<?php
// CADASTRO
function notasValidacao($titulo, $conteudo){ 
    
    if (empty($titulo) || empty($conteudo)) {
        echo "Todos os campos precisam estar preenchidos";
    } else {
        require_once 'notas.php';
        $notas = new notas($titulo, $conteudo);

        require_once 'conexaoDAO.php';
        $conexaoBanco = new conexaoDAO();
        $query = "insert into notas (titulo, conteudo) values ('" . $titulo . "','" . $conteudo . "')";
        $cadastrarBanco = $conexaoBanco->cadastrarNota($query);
    }
}


function notasConsulta($query){
    
    include ('conexaoDAO.php');
    $conexaoBanco = new conexaoDAO();
    $dados = $conexaoBanco->consultarNotasObjeto($query);
    
    if (empty($dados)) {
        echo "Você não possui Notas registradas.";
    } else {
        return $dados;
    }
}


?>
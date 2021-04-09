<?php 
//CADASTRAR NOVA NOTA

function cadastrarNota() {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    require_once 'notasValidacao.php';
    notasValidacao($titulo, $conteudo);
}

if (!empty($_POST['titulo']) && !empty($_POST['conteudo'])){
    cadastrarNota();
}

//CONSULTAR NOTAS

function consultarNotas() {
    require_once 'notasValidacao.php';
    $query = "select * from notas";
    $dados = notasConsulta($query);
    return $dados;
}

//EDITAR NOTAS

function editarNotas($identificador) {
    require_once 'notasValidacao.php';
    $query = "SELECT * FROM notas WHERE id_nota = " . $identificador;
    $dados = notasConsulta($query);
    print_r($dados);
    require_once '../editarNotas.php';
//     header ('Location: ../cadastrarNotas.php?id='.$identificador);

}

if (!empty($_GET['id'])){
    $identificador = $_GET['id'];
    editarNotas($identificador);
//     include '../cadastrarNotas.php';
}


?>
<?php 

class conexaoDAO{
    public $conectar;
    
    function __construct(){
        require_once 'conexaoDB.php';
        $conectar = new Conexao;
        $conecta = conectar->__construct;
    }
    
    function consultar(&$sql)
    {
        $resultado = $this->PDO->query($sql);
        $linhas = $resultado->fetchAll(PDO::FETCH_OBJ);
        return $linhas;
    }
}

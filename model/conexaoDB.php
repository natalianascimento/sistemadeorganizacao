<?php 
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'teste');

class Conexao
{
    protected $conectar;
    
    function __construct()
    {
        $this->conectar = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
        try {
            $this->conectar = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
}

?>
<?php 

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'teste');

class ConexaoDB {
    protected $conectar;

    function conectar()
    {
        $this->conectar = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
        try {
            $this->conectar = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
            $this->conectar->exec("SET CHARACTER SET utf8"); //O QUE QUER DIZER ISSO? ESSE FOI O PONTO QUE EU ALTEREI QUE FEZ FUNCIONAR
            
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
            die;
        }
        
        return $this->conectar;
    }

}

$conectar = new conexaoDB;
$pdo = $conectar->conectar();
$stmt = $pdo->prepare('select * from usuario');
$stmt->execute();
$resultado = $stmt->fetchAll();
foreach($resultado as $key){
        var_dump($key);
}






?>

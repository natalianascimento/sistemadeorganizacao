<?php 

class autenticacaoDAO
{
    
    protected $conectar;
    
    protected $conectafuncao;
    
    function __construct()
    {
        include ('conexaoDB.php');
        $this->conectar = new ConexaoDB();
        $this->conectafuncao = $this->conectar->conectar();
    }
    
    function testeConexao()
    {
        $stmt = $this->conectafuncao->prepare('select * from usuario');
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach ($resultado as $key) {
            var_dump($key);
        }
    }
    
    function login(&$usuario, &$senha)
    {
        $query = "select id_usuario, nome_usuario from usuario where nome_usuario ='" . $usuario . "' and senha=md5('" . $senha . "')";
        $stmt = $this->conectafuncao->prepare($query);
        $stmt->execute();
        $resultado = $stmt->rowCount();
        return $resultado;
    }
}
?>
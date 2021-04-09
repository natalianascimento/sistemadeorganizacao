<?php

class conexaoDAO
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

    function consultarNotasObjeto($query)
    {
        //require_once 'Notas.php';
        //$query = "select * from notas";
        $stmt = $this->conectafuncao->query($query);
        //$stmt = $this->conectafuncao->prepare($query);
       // $resultado = $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $dados;}
    
    function consultarNotasObjetoA($query)
    {
        require_once 'Notas.php';
        //$query = "select * from notas";
        $stmt = $this->conectafuncao->prepare($query);
        $resultado = $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_CLASS, 'Notas');
        return $dados;

        // $notas = new Notas();
        // $notas->criarParametros('teste','teste de conteudo');
        // print_r ($notas);

        // print_r ($dados);
        // $dados = $resultado->fetchAll(PDO::FETCH_OBJ);
        // return $dados;
    }

    function cadastrarNota($query)
    {
        //$query = "insert into notas (titulo, conteudo) values ('" . $titulo . "','" . $conteudo . "')";
        $stmt = $this->conectafuncao->prepare($query);
        $resultado = $stmt->execute();
        if ($resultado) {
            $ultimoId = $this->conectafuncao->lastInsertId();
            echo $ultimoId;
        } else {
            echo "Erro";
        }
    }

    function consultarNotas()
    {
        $query = "select * from notas";
        $stmt = $this->conectafuncao->prepare($query);
        $resultado = $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($dados as $item) {
            print_r($item) . "<br>";
            
            // echo $item->titulo;
            // print_r ($item);
        }
        // $dados = $resultado->fetchAll(PDO::FETCH_OBJ);
        // return $dados;
    }
    
}

// TESTES
// $titulo = "Nota 1";
// $conteudo = "Conteudo da Nota Conteudo da Nota Conteudo da Nota";
// $teste = new conexaoDAO;
// $testagem = $teste->cadastrarNota($titulo, $conteudo);

// $teste = new conexaoDAO();
// $testagem = $teste->consultarNotasObjeto();

?>
<?php

class Notas
{

    private $id_nota;

    private $titulo;

    private $conteudo;

    /**
     *
     * @return mixed
     */
    public function getId_nota()
    {
        return $this->id_nota;
    }

    /**
     *
     * @param mixed $id_nota
     */
    public function setId_nota($id_nota)
    {
        $this->id_nota = $id_nota;
    }

//     public function __construct($titulo, $conteudo)
//     {
//         $this->titulo = $titulo;
//         $this->conteudo = $conteudo;
//     }
    public function criarParametros($titulo, $conteudo)
    {
        $this->titulo = $titulo;
        $this->conteudo = $conteudo;
    }
    public function __construct()
    {
    }
    /**
     * * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * * @return mixed
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * * @param mixed $nome
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * * @param mixed $telefone
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }
}

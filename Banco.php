<?php

class Banco
{
    private $nome;
    private $endereco;
    private $telefone;
    private $gerente;

    public function __construct($nome, $endereco, $telefone, $gerente)
    {
        $this->setNome($nome);
        $this->setEndereco($endereco);
        $this->setTelefone($telefone);
        $this->setGerente($gerente);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getGerente()
    {
        return $this->gerente;
    }

    public function setGerente($gerente)
    {
        $this->gerente = $gerente;
    }
}
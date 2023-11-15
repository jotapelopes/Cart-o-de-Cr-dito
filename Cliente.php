<?php

class Cliente
{
    private $nome;
    private $email;
    private $endereco;
    private $telefone;

    public function __construct($nome, $email, $endereco, $telefone)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setEndereco($endereco);
        $this->setTelefone($telefone);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
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
}
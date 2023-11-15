<?php

require_once "Banco.php";
require_once "Cliente.php";

class Credito
{
    private $banco;
    private $cliente;
    private $bandeira;
    private $limite;
    private $vencimento;
    private $compras;

    public function __construct($banco, $cliente, $bandeira, $limite, $vencimento)
    {
        $this->setBanco($banco);
        $this->setCliente($cliente);
        $this->setBandeira($bandeira);
        $this->setLimite($limite);
        $this->setVencimento($vencimento);
        $this->compras = [];
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getBandeira()
    {
        return $this->bandeira;
    }

    public function setBandeira($bandeira)
    {
        $this->bandeira = $bandeira;
    }

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;
    }

    public function getVencimento()
    {
        return $this->vencimento;
    }

    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;
    }

    public function comprar($valor)
    {
        if (array_sum($this->compras) + $valor > $this->getLimite()) {
            echo "Não foi possível realizar a compra pois o saldo é insuficiente! <br>";
        } else {
            $this->compras[] = $valor;
        }
    }

    public function total()
    {
        return array_sum($this->compras);
    }

    public function fatura()
    {
        echo "Compras realizadas: " . implode(", ", $this->compras) . "<br>";
        echo "Valor total da compra: " . $this->total() . "<br>";
    }

    public function extrato()
    {
        echo "Banco: " . $this->getBanco()->getNome() . "<br>";
        echo "Cliente: " . $this->getCliente()->getNome() . "<br>";
        echo "Bandeira: " . $this->getBandeira() . "<br>";
        echo "Limite: " . $this->getLimite() . "<br>";
        echo "Vencimento: " . $this->getVencimento() . "<br>";
        echo "Extrato da fatura:" . "<br>";
        $this->fatura();
    }
}

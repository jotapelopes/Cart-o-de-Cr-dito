<?php

require_once "Banco.php";
require_once "Cliente.php";
require_once "Credito.php";


$banco1 = new Banco("SantoAnder", "Rua da Graça", "658889872165", "Valdir");

$cliente1 = new Cliente("João Pedro Lopes", "joao@lopes.com", "Mario M Marques", "14998210673");

$credito1 = new Credito($banco1, $cliente1, "Mastercard", 1000, "30/12");

$credito1->comprar(500);
$credito1->comprar(300);
$credito1->comprar(300);

echo "Cliente 1<br>";

echo "Extrato:<br>";
$credito1->extrato();

echo "<br><br><br>";


$banco2 = new Banco("BrancoDesco", "Central", "14556372", "Valdir");

$cliente2 = new Cliente("Rosangela", "Rosangela@gmail.com", "Centro", "51486656");

$credito2 = new Credito($banco2, $cliente2, "Visão", 2500, "30/11");

$credito2->comprar(50);
$credito2->comprar(30);
$credito2->comprar(5);
$credito2->comprar(15);
$credito2->comprar(55);
$credito2->comprar(65);

echo "Cliente 2<br>";
echo "Extrato:<br>";;
$credito2->extrato();
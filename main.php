<?php
require_once "cinema.php";
require_once "cliente.php";
require_once "ingresso.php";

$pessoa = new Cliente();
$pessoa-> setCliente("Luana");
$pessoa->nome();
$pessoa->sala();

$ingressos = new Ingresso(05);
$ingressos->setCliente("Luana");
$ingressos->poltrona();
$ingressos->filme();
$ingressos->horario();


?>
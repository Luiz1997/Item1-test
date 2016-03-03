<?php

print "Qual o sexo do cliente? ";
$sexo = trim(fgets(STDIN));

if ($sexo == 'f' || $sexo == 'F') {
	$entrada = 8.00;
	print "Valor da entrada: " . $entrada;
}
else {
	$entrada = 10.00;
	print "Valor da entrada: " . $entrada;
}

print "\nQuantas cervejas foram consumidas? ";
$qcerva = trim(fgets(STDIN));

$cerva = $qcerva * 2.50;

print "Quantos refrigerantes foram consumidos? ";
$qrefri = trim(fgets(STDIN));

$refri = $qrefri * 2.10;

print "Quantos espetinhos foram consumidos? ";
$qespe = trim(fgets(STDIN));

$espe = $qespe * 4.00;

$comida = $cerva + $refri + $espe;

$total = $comida + $entrada;

$carçon = $total * 10 / 100;

$totalreal = $total + $carçon;

print "\nValor da conta: " ;

print "\nR$ " . $entrada . " (valor básico)";

print "\nR$ " . $comida . " (bebida e comida)";

if ($comida < 15.00) {
	print "\nR$ 3,00 (cantores) ";
}
else {
	print "\nR$ 0,00 (cantores) ";
}

print "\nR$ " . $total . " (subtotal sem 10%)";

print "\n----------------------------------------------";

print "\nR$ " . $totalreal . " (total)";

?>
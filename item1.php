<?php
print "Digite o sexo do cliente (f/m): ";
$sexo = trim(fgets(STDIN));

if ($sexo == 'f' || $sexo == 'F') {
	$entrada = 8;
}
else {
	$entrada = 10;
}
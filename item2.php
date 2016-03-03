<?php
print "Total de rendimentos bancarios: ";
$renbanc = trim(fgets(STDIN));

print "Total de rendimentos de salarios ou servicos: ";
$rensal = trim(fgets(STDIN));

print "Total de outros rendimentos: ";
$totaloutrosren  = trim(fgets(STDIN));

print "Servicos medicos pagos: ";
$sermed = trim(fgets(STDIN));

print "Servicos educacionais pagos: ";
$seredu = trim(fgets(STDIN));

$renbancpor = $renbanc * 20 / 100;

print "\nTotal de impostos: ";

print "\nR$ " . $renbancpor . " (sobre rendimentos bancarios)";

if ($rensal <= 8000) {
	print "\nR$ " . $rensal . " (sobre salarios servicos)";
}
else {
	if ($rensal > 8000 && $rensal < 24000) {
		$rensalpor = $rensal * 15 / 100;
		print "\nR$ " . $rensalpor . " (sobre salarios servicos)";
	}
	else {
		$rensalpor = $rensal * 20 / 100;
		print "\nR$ " . $rensalpor . " (sobre salarios servicos)";
	}
}

$totaloutrosrenpor = $totaloutrosren * 10 / 100;

print "\nR$ " . $totaloutrosrenpor . " (sobre outros rendimentos)";

$totalbancserou = $totaloutrosrenpor + $rensalpor + $renbancpor;

print "\nR$ " . $totalbancserou . " (total)";

print "\n----------------------------------------------";

$mededupor = $totalbancserou * 30 / 100;

print "\nMaximo a ser abatido:";
		
print "\nR$ " . $mededupor;

print "\n----------------------------------------------";

print "\nTotal de valores possiveis de abater:";
		
print "\nR$ " . $sermed . " (servicos medicos)";

print "\nR$ " . $seredu . " (servicos educacionais)";

$sermededu = $sermed + $seredu;

print "\nR$ " . $sermededu . " (total)";

print "\n----------------------------------------------";

print "\nImposto total:";
		
print "\nR$ " . $totalbancserou . " (imposto bruto)";

print "\nR$ " . $mededupor . " (abatimentos)";

$totalmedporbancserou = $totalbancserou - $mededupor;

print "\nR$ " . $totalmedporbancserou . " (total)";

?>
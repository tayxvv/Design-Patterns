<?php 

$idInscricaoStrPad = str_pad('318068', 8, '9', STR_PAD_LEFT);
$codigoIBGEUnidadeFederadal = substr('22113570260', 0, 2);
print "{$codigoIBGEUnidadeFederadal}{$idInscricaoStrPad}";
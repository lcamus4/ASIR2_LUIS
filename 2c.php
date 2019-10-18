<?php
function calcula($a,$b){
	$r=null;
	$r=$r. "Suma:".$a."+".$b."=".($a+$b).'</br>';
	$r=$r."Resta:".$a."-".$b."=".($a-$b).'</br>';
	$r=$r. "Multiplicar:".$a."*".$b."=".($a*$b).'</br>';
	$r=$r. "Division:".$b."/".$a."=".($b/$a).'</br>';
	return $r;
}
$r=calcula(11,24);
echo $r;
$r= calcula(24,31);
echo $r;
?>
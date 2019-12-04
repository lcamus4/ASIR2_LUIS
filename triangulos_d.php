<?php
function longitud ($d,$e,$f) {
	$r="triangulo escaleno";
	if ($d==$e || $e==$f)
		$r="triangulo isosceles";
	if ($e==$f and $d==$f)
		$r="triángulo equilatero";
	return $r;
}
function angulo ($a,$b,$c) {
		$r="triangulo acutangulo";
			if ($a==45 or $b==45 or $c==45)
				$r="triangulo rectangulo";
			if ($a>45 or $b>45 or $c>45)
				$r="triangulo obtusangulo";
			return $r;
}
$a= [
	'lados'=>[1,1,1],
	'angulo'=>[30,30,30],
	];
$a= [
	'lados'=>[1,1,1.2021],
	'angulo'=>[45,22,22],
	];
function C ($a){
	return longitud(
		$a['lados'][0],
		$a['lados'][1],
		$a['lados'][2]).' y '.angulo(
		$a['angulo'][0],
		$a['angulo'][1],
		$a['angulo'][2]);
}
echo C($a);
?>
<?php
function angulos ($a,$b,$c) {
		$r="Triangulo Acutangulo";
			if ($a==45 or $b==45 or $c==45)
				$r="Triangulo Rectangulo";
			if ($a>45 or $b>45 or $c>45)
				$r="Triangulo Obtusangulo";
			return $r;
}
function longitud ($d,$e,$f) {
	$r="triangulo escaleno";
	if ($d==$e || $e==$f)
		$r="triangulo isosceles";
	if ($e==$f and $d==$f)
		$r="Triangulo equilatero";
	return $r;
}
function C ($a,$b,$c,$d,$e,$f){
	return angulos($a,$b,$c).' y '.longitud($d,$e,$f);
}
echo C(55,20,15,3,1,2)."<br>";
echo C(30,45,15,2,2,4)."<br>";
echo C(30,30,30,1,1,1)."<br>";
?>
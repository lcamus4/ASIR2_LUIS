<?php
if(isset($_GET['email']))
	print_r($_GET);
$f=fopen('catalogo.php','a');
fwrite($f,$_GET['email']."\r\n");
fclose($f)
?>

<form>
	<input name="email"/>
	<button>Catalogo</button>
</form>
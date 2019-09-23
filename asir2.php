ASIR2
<a href="http://192.168.0.86/asir2.php">Pablo</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>
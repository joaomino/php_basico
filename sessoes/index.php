<?php
session_start();

$login = "mino";
$senha = "123";

if ($login=="mino" and $senha=="1234") {
	$_SESSION['logado'] = true;
	echo "logado!" . "<br>";
	?><a href="secreto.php">Veja aqui sua p�gina secreta</a><?php
}
else {
	echo "n�o logado!";
}

?>
<?php session_start(); ?>

<?php if(isset($_SESSION['logado'])):?>
		<h1>Voce esta vendo uma página secreta</h1>
		<p>O Resultado da megasena vai ser: 12 13 15 16 21</p>
		<p><a href="logout.php">Logout (Sair)</a></p>
<?php else:?>
		<h1>Você quer acessar uma página secreta</h1>
		<p>Voce deve logar para ver a pagina</p>
		<p><a href="index.php">Logar</a></p>
<?php endif;?>
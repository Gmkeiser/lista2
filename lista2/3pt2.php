<!DOCTYPE html>
<html>
<head>
	<title>batata</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	$nome = $_POST['nome'];
	$vinho = $_POST['vinho'];
	$prato = $_POST['prato'];
	?>
	<p>Obrigado pela sua seleção, <?php echo $nome ;?></p><br/>
	<hr>
	<p>Você honestamente aprecia <?php echo $refeicao ;?></p><br/>
    <p>especialmente com um bom vinho <?php echo $vinho ;?></p><br/>
</body>
</html>
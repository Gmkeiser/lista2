<!DOCTYPE html>
<html>
<head>
	<title>batata</title>
</head>
<body><?php
$mensagem = $_POST['texto'];
$op = $_POST['op'];
if($operacao == "t"){
print strlen ($mensagem);
}
elseif($operacao == "i"){
print strrev ($mensagem);
}
elseif($operacao == "M"){
print strtoupper ($mensagem);
}
elseif($operacao == "m"){
print strtolower ($mensagem);
}
else{
print ucwords ($mensagem);
}
?>
</body>
</html>
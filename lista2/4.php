<!DOCTYPE html>
<html>
<head>
	<title>batata</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="4pt2.php">
	Valor 1: <input type="text" name="v1" /> <br/>
	Valor 2: <input type="text" name="v2" /> <br/>
	Calculo: <br/>
	<input id="somar" type="radio" name="op" value="somar">
	<label for="somar">somar</label>
	<input id="subtrair" type="radio" name="op" value="subtrair">
	<label for="subtrair">subtrair</label>
	<input id="multiplicacao" type="radio" name="op" value="multiplicacao">
	<label for="multiplicacao">multiplicação</label>
	<input id="divisao" type="radio" name="op" value="divisao">
	<label for="divisao">divisão</label>
	<input type="submit" value="Calcular" />
	<input type="reset" value="Limpar">
</form>

</body>
</html>
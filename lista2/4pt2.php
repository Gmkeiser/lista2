<!DOCTYPE html>
<html>
<head>
	<title>batata</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	$v1 = $_POST['v1'];
	$v2 = $_POST['v2'];
	$op = $_POST['op'];
	if($op == "somar")
            $c = $a + $b;
            
        else if($op == "subtrair")
            $c = $a - $b;
            
        else if($op == "multiplicacao")
            $c = $a*$b;
           
        else
            $c = $a/$b;
         echo "O resultado do calculo é: $c";
    ?>      
	?>

</body>
</html>
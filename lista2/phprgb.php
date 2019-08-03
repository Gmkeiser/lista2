<!DOCTYPE html>
<html>
<head>
	<title>batata</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$red = $_POST['red'];
$green = $_POST['green'];
$blue = $_POST['blue'];
$rgb = $red.','.$green.','.$blue;
?>
R:<?php echo $red; ?>
</br>
G:<?php echo $green; ?>
</br>
B:<?php echo $blue; ?>
</br>
<div style=" width:150px; height:150px; background-color: rgb(<?php echo $rgb; ?>);"></div>
</body>
</html>
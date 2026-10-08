<html>
	<head>
		<title>numero</title>
	</head>
	<body>
<?php
$numero = 30;

#echo $numero = $numero + $numero;
echo "Empieza la cuenta de 1 a " . $numero . "<br>";

for ($incremento = 1; $incremento <= $numero; $incremento = $incremento + 1) {
    echo $incremento  . "<br>"; 
}

echo "ahora empieza la cuenta atras <br>";

for ($incremento = $numero; $incremento >= 1; $incremento = $incremento - 1) {
    echo $incremento . "<br>";
}

?>
</html>
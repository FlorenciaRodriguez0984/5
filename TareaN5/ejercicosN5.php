<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP</title>
</head>
<body>
<?php
//ejN°1 

for ($i = 1; $i <= 100; $i++) {
    echo $i;
    echo "<br>";
  }


 //ejN°2 

for ($i = 100; $i >= 1; $i++) {
    echo $i;
    echo "<br>";

  }

  

 //ejN°3

 for($n=2; $n<=100; $n= $n+2){
 
    echo $n."</br>";
}

//ejN°4

$i = 1;     
$n = 100;   
$impar = 1; 
while ( $i <= $n){
	echo "$impar <br />";
	$i = $i + 1;
	$impar = $impar + 2;
    echo "<br>";
}

//ejN°5

$i = 1;
$suma = 0;

while ( $i <= 20){
	$suma = $suma + $i;
	$i = $i + 1;
}

echo "La suma de los números del 1 al 20 es = $suma";

//ejN°6

$resultado = 0;
for($i = 0; $i <= 20; $i++){
  echo "i es $i y resultado es $resultado ...";  
  $resultado += $i;
  echo "resultado actual: $resultado\n";      
}

?>
</body>
</html>

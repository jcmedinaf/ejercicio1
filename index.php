<?php

echo "Hola Mundo!!!!!";
echo "<br>";
echo "Aplicaciones web: ", "Nocturno";
echo "<br>";
print("Lorem ipsu " . "UJGH");
print("<br>");

// comentario 1 linea

/*

comentario 
de
varias
lineas
*/

//variables
//String nombre;

$nombre = "Maria";
$apellido = 'Mendez';

$edad = 18;

$ventas = 1234.99;

$apagado = true;

$fecha = "15-09-2026";

echo $nombre, "<br>";
print($edad);

//---------------------------------------

+-*/
&& ||

< > >= >= !
= == === != !==  !===

OSO     OSO
15     "13"


$num1 = 11;
$num2 = 55;
$num4 = 84;
$resultado = $num1 + $num2 * $num4;
echo $resultado;

//-------------------------

for($i = 0; $i <= 4; $i++){

    echo "Hola Mundo " . $i;
    echo "<br>";
}


$i=0;
do{
    
    echo $i;
$i = $i + 1;
//$i++;
//$i+=1;
}while($i <= 3);

$j = 0;
while($j <=2){
    echo $j;
    $j+=1;
}

//--------------------------
$promedio = 12;
if($promedio >= 9.5){
    echo "SI pasaste la materia";
}


$promedio = 02;
if($promedio >= 9.5){
    echo "SI pasaste la materia";
}else{
    echo "NO pasaste la materia", "<br>";
    echo "Sigue intentando para la proxima";
}


$average = 18.5;
if($average >= 19 && $average <= 20){
    echo "EXCELENTE";
}else if($average >= 15 && $average <=18.99){
    echo "Buen estudiante";
}else if($average >= 12 && $average <=14.99){
    echo "REGULAR";
}else if($average >= 9.5 && $average <=11.99){
    echo "Deficiente";
}else if($average >= 00 && $average <=9.4){
    echo "EL ALUMNO TIENE QUE REPETIR";
}else{
    echo "ingrese un numero valido entre 0 y 20";
}

//----------------------------------
$ave = 5;
switch($ave){
    case 20:
        echo 20;
        break;
    case 19:
        echo 19;
        break;
    case 18:
        echo 18;
        break;
    case 17:
        echo 17;
        break;
    case 14:
        echo 14;
        break;
    case 12:
        echo 12;
        break;
    case 10:
        ECHO 10;
        break;
    default:
        echo "ingrese los valores de 20,19,18,17,14,12,10";
        break;
}

































?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "APP WEB";    ?></title>
</head>
<body>
    <?php   
    
        echo "<hr>";
    
    
    ?>
</body>
</html>

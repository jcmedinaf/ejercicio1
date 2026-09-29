<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CALCULO</h2>

    <form action="#" method="post"> 
    <label for="idNumero1">Numero 1</label> <br>
    <input type="number" name="txtNumero1" id="idNumero1"><br>
    <label for="idNumero2">Numero 2</label> <br>
    <input type="number" name="txtNumero2" id="idNumero2"><br>  

    <input type="submit" value="Calcular">
    </form>

<?php

if(isset($_POST)){

    $num1 = $_POST['txtNumero1'];
    $num2 = $_POST['txtNumero2'];
    
    
    $result = $num1 * $num2;
    
    echo "El resultado es: " . $result;
}


?>

</body>
</html>

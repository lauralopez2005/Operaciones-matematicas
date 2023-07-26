<?php
//variables
$n1=0; $n2=0; $s=0;
//
if(isset($_POST["btncalcular"])){
    $n1 = (int)$_POST["txtn1"];
    $n2 = (int)$_POST["txtn2"];
    //salida
    $s = $n1 - $n2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resta</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" type="image/png" href="imagenes/matematicas.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="logo">
        <img src="imagenes/matematicas.png" alt="OPERACIONES MATEMÁTICAS" width="40" height="40" class="d-inline-block align-text-top">
        OPERACIONES MATEMÁTICAS
      </div>
</nav>
<body>
    <form action="resta.php"  method="post">
        <table background color=blue border=2>
            <tr> 
                <td>Calculo de resta de dos numeros</td>
            </tr>
            <tr>
                <td>Núumero 1</rd>
                <td><input name="txtn1" type="text" id="txtn1" value="<?=$n1?>">
            </td>
          </tr>
          <tr>
                <td>Número 2</rd>
                <td><input name="txtn2" type="text" id="txtn2" value="<?=$n2?>">
            </td>
          </tr>
          <tr>
                <td>Resta</rd>
                <td>
                    <input name="txts" type="text" id="txts" value="<?=$s?>"    >
                </td>
          </tr>
          <tr>
            <td></td>
            <td>
                <input name="btncalcular" type="submit" id="btncalcular" value="calcular">
            </td>
         </tr>       
        </table>
    </form>
</body>
</html>
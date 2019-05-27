<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Pollos hermanos</title>
</head>
<body>
<section>

    <h1><img src="img/logo.png" alt="logo" class="logo">BIENVENIDO A LOS POLLOS HERMANOS</h1>
    <?php
include_once('datos.php');  
echo('<pre>');

echo('<hr>'. 'PRODUCTOS QUE OFREZEMOS - ');
print_r($productos);
echo('</pre>');
    ?>
<article>
    <span>Unid.</span> 
    <span>Descripcion</span>

</article>
<article>
 <form action="ticket.php" method="post"> 
       
 <?php


 for($i = 0; $i < 5; $i++){
  echo('<input type="number" name="unidad0' . $i . '" id="">');

  echo('<select name="descripcion0' . $i . '" id="" require>');
  echo('<option value="">* productos</option>'); //poner value vacio para evitar warnings
  echo('<option value="sandwich pollo">sandwich pollo</option>');
echo('<option value="tapa cerdo">tapa cerdo</option>');
echo('<option value="hamburguesa">hamburguesa</option>');
echo('<option value="patatas frita">patatas frita</option>');
echo('<option value="alitas de pollo">alitas de pollo</option>');

  echo('</select>');
 
echo('<br>');
 }

    ?>    
        <button type="submit">CALCULAR</button>
        </form>
    </article>
</section>
</body>
</html>
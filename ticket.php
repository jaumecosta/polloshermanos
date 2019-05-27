<?php
//******************************* 
//archivos externos
include_once('datos.php');  //include solo hace warnings, require avisa del fatal error
echo('<link rel="stylesheet" href="css/styles.css">');



//encabezado
/*echo('<pre>');

echo('<hr>'. '$productos - ');
print_r($productos);
echo('</pre>');
*/

//lista de productos con sus precios y su total
/*('<pre>');
echo('<hr>'. '$_REQUEST - ');
print_r($_REQUEST);   //recoje los datos de lo que lanzamos
echo('<hr>');
echo('</pre>');
//Sacar la informacion para utilizar en el ticket
echo('<br>');
*/
$cont = 0;
$base = 0;
foreach($_REQUEST AS $valor){   //Un for para los arrays, permite sacar los datos del array
    echo($valor);//valor par

if( ($cont %= 2) &&  ($valor != "") ){ // contador ($count) es impar     2 es impar, 1 es par  //poner parentesis en el if para evitar warnings para no saturar codigo
    $precio = $productos[$valor];
    $total = $precio * $unidad;  
   echo( $precio . '<br>');
  $base += $total;
}
$unidad = $valor; //almacena brevemente el valor unidad
$cont++;
}
echo('<br>');

echo 'BASE: ' . $base . '<br>';

//iva
$iva = $base * 0.21;
echo 'IVA ' . $iva . '<br>';
//total
$total = $base + $iva;
echo 'TOTAL: ' . $total . '<br>';
?>
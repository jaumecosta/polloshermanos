<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESCOGE EL TIPO DE COMIDA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<section>
<h1><img src="img/logo.png" alt="logo" class="alitas">BIENVENIDO A LOS POLLOS HERMANOS</h1>

<form action="" method="post">
            <h2>PON LO QUE TE HAGA MAS ILUSION</h2>
          <select name="pedir">
          <option value="escoja que quiere comer">Escoja que quiere comer</option>    
          <option value="alitas">alitas</option>    
          <option value="hamburguesa">hamburguesa</option>    
          <option value="complementos">complementos</option>    

                  </select>
                  <br>                  <br>

            <button type="submit">Entrar</button>
    </form>
</body>

<?php

if (isset($_REQUEST["pedir"])){
    if($_REQUEST["pedir"] == 'alitas'){
        header('location:pedido.php');
    }else if($_REQUEST["pedir"] == 'hamburguesa'){
        header('location:pedido.php');
    }else if($_REQUEST["pedir"] == 'complementos'){
        header('location:pedido.php');
    }
}
?>
</section>
</html>


<?php

    $msj0=gettext("titulo"); //Titulo página
    $msj1 =gettext("Wellcome"); //Mensaje de bienvenida
    $msj2=gettext("FR"); //boton frances
    $msj3=gettext("EN"); //...ingles
    $msj4=gettext("ES"); // castellano
    $msj5=gettext("sel_idioma"); //titulo radio buton
    $msj6=gettext("dat_acceso"); //titulo caja acceso
    $msj7=gettext("usuario");
    $msj8=gettext("contraseña");
    $msj9=gettext("sel_idioma_submit"); //boton del radio buton
    $msj10=gettext("acceso_submit"); //boton acceso a sitio.php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title><?= $msj0?></title>
</head>
<body>
<h1><?= $msj1?> </h1>


<fieldset class="idioma">
    <form action="index.php" method="post">

        <legend><?= $msj5?></legend>
        <input type="radio" name="idioma" value="frances"><?= $msj2?><br/>
        <input type="radio" name="idioma" value="ingles"><?= $msj3?><br/>
        <input type="radio" name="idioma"  value="castellano"><?= $msj4?>
        <input type="submit" style='float:right' name="submit" value=<?=$msj9?> >
    </form>
</fieldset>
<hr style='margin-top:50px' />
<form action="sitio.php"  method="post">
    <fieldset class="login">
        <legend><?= $msj6?></legend>
        <label for="user"><?= $msj7?></label><input type="text" name="user"><br />
        <label for="pass"><?= $msj8?></label><input type="text" name="pass">
        </label><input type="submit" name="submit" value=<?=$msj10?> >
    </fieldset>
</form>

</body>
</html>

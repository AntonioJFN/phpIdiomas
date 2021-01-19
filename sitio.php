<?php

    $msg0=gettext("h1"); //Contenido h1 aplicacion adaptada al idioma...
    $msg1 =gettext("h2"); //Contenido h2 pagina de Manuel
    $msg2=gettext("FR"); //boton frances
    $msg3=gettext("EN"); //...ingles
    $msg4=gettext("ES"); // castellano
    $msg5=gettext("sel_idioma"); //titulo radio buton
    $msg9=gettext("sel_idioma_submit"); //boton del radio buton
    $msg10=gettext("volver"); //boton Volver a index.php



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css" type="text/css">

</head>
<body>
<h1><?=$msg0?></h1>


<fieldset class="idioma">
    <form action="index.php" method="post">

        <legend><?= $msg5?></legend>
        <input type="radio" name="idioma" value="frances"><?= $msg2?><br/>
        <input type="radio" name="idioma" value="ingles"><?= $msg3?><br/>
        <input type="radio" name="idioma"  value="castellano"><?= $msg4?>
        <input type="submit" style='float:right' name="submit" value=<?=$msg9?> >
    </form>
</fieldset>
<hr style='margin-top:50px' />

<h2><?=msg1?></h2>

    <form action="index.php" method="post">

        <input type="submit" style='float:right' value=<?=$msg10?> >
        <input type="hidden" name =idioma value = '' >
    </form>

</body>
</html>


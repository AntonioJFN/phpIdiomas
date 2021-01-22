<?php
require_once 'funciones.php';

$usuario=$_POST['user'];
$password=$_POST['pass'];

//si venimos de index o de sitio guardamos el idioma , sino lo establecemos a castellano
$idioma=isset($_POST['idioma']) ? $_POST['idioma']:"castellano";
//para guardar la selección del idioma pondremos un checked en el formulario del radio boton para el ultimo idioma seleccionado
$arrastra_castellano=$idioma=="castellano" ? "checked":"";
$arrastra_frances=$idioma=="frances" ? "checked":"";
$arrastra_ingles=$idioma=="ingles" ? "checked":"";

//si no hay pass y user volvemos al index
if (!comprobar_integridad($usuario,$password)){
    $error_datos="error_datos";
    header("Location:index.php?err=$error_datos&idioma=$idioma");
}

//definimos las variables que cambiarán dependiendo del idioma establecido
$msj0=gettext("titulositio"); //Titulo página
$msj1 =gettext("h1sitio"); //Mensaje de bienvenida
$msj2=gettext("FR"); //boton frances
$msj3=gettext("EN"); //...ingles
$msj4=gettext("ES"); // castellano
$msj5=gettext("sel_idioma"); //titulo radio buton
$msj6=gettext("dat_acceso"); //titulo caja acceso
$msj9=gettext("sel_idioma_submit"); //boton del radio buton
$msj11="h2sitio";
$msj12="submit_volver";

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
<h1><?=$msj1?></h1>


<fieldset class="idioma">
    <form action="sitio.php" method="post">
        <legend><?= $msj5?></legend>
        <input type="radio" name="idioma" value="frances" <?=$arrastra_frances?>><?= $msj2?><br/>
        <input type="radio" name="idioma" value="ingles" <?=$arrastra_ingles?>><?= $msj3?><br/>
        <input type="radio" name="idioma"  value="castellano" <?=$arrastra_castellano?>><?= $msj4?><br/>
        <input type="hidden" name='user' value=<?=$usuario?>>
        <input type="hidden" name='pass' value=<?=$password?>>
        <input type="submit" style='float:right' name="submit" value=<?=$msj9?> >

    </form>
</fieldset>

<hr style='margin-top:50px' />

<h2><?=$msj11."  ".$usuario?></h2>

    <form action="index.php" method="post">
        <input type="hidden" name =idioma value = <?=$idioma?> >
        <input type="submit" style='float:right' value=<?=$msj12?> >

    </form>

</body>
</html>


<?php
require_once 'funciones.php';
//definimos variables

//tomará el valor del mensaje en caso de error de autentificación desde sitio sin datos de acceso en index
$error = isset( $_GET[ 'err' ] ) ? $_GET[ 'err' ] : null;
//si venimos de index (POST), desde sitio sin datos de acceso en index (GET) o de sitio (POST) guardamos el idioma,sino lo establecemos a castellano
$idioma=isset($_POST['idioma']) ? $_POST['idioma']:(isset( $_GET[ 'idioma' ] ) ? $_GET[ 'idioma']:"castellano");
//para guardar la selección del idioma pondremos un checked en el formulario del radio boton para el ultimo idioma seleccionado
$arrastra_castellano=$idioma=="castellano" ? "checked":"";
$arrastra_frances=$idioma=="frances" ? "checked":"";
$arrastra_ingles=$idioma=="ingles" ? "checked":"";

if (!setlocale(LC_ALL, codigo_idioma($idioma))){
    echo "No se ha podido cargar el idioma $idioma como categoría LC_ALL";
}
if (!putenv("LC_ALL=".codigo_idioma($idioma)."")){
    echo "No se ha podido establecer el idioma $idioma en variables de entorno<br />";
}
bindtextdomain('fichero', './locale');

//definimos las variables que cambiarán dependiendo del idioma establecido
$msj0=gettext("tituloindex"); //Titulo página
$msj1 =gettext("Hola+idioma"); //Mensaje de bienvenida
$msj2=gettext("FR"); //boton frances
$msj3=gettext("EN"); //...ingles
$msj4=gettext("ES"); // castellano
$msj5=gettext("sel_idioma"); //titulo radio buton
$msj6=gettext("dat_acceso"); //titulo caja acceso
$msj7=gettext("usuario");
$msj8=gettext("contraseña");
$msj9=gettext("sel_idioma_submit"); //boton del radio buton
$msj10=gettext("acceso_submit"); //boton acceso a sitio.php
$msj11=gettext($error);//traducción error si falta user y/o pass


?>

<!doctype html>
<html lang="es">
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
        <input type="radio" name="idioma" value="frances" <?=$arrastra_frances?> ><?= $msj2?><br/>
        <input type="radio" name="idioma" value="ingles" <?=$arrastra_ingles?>><?= $msj3?><br/>
        <input type="radio" name="idioma" value="castellano" <?=$arrastra_castellano?> ><?= $msj4?><br />
        <input type="submit" style='float:right' name="submit" value=<?=$msj9?> >
    </form>
</fieldset>

<hr style='margin-top:50px' />
<form action="sitio.php"  method="post">
    <fieldset class="login">
        <legend><?= $msj6?></legend>

        <label for="user"><?= $msj7?></label><input type="text" name="user"><br />
        <label for="pass"><?= $msj8?></label><input type="text" name="pass">
        <?php echo $error ?></br>
        <input type="hidden" name="idioma" value=<?=$idioma?> >
        <label for="submit"></label><input type="submit" name="submit" value="<?=$msj10?>" >
    </fieldset>
</form>

</body>
</html>

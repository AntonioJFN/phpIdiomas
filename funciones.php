<?php

/**Dadas dos variables comprobamos que no hay alguna que no esté informada
 * @param $a
 * @param $b
 * @return bool
 */
function comprobar_integridad($a,$b):bool{
    return !(empty($a)||empty($b));
}


/**Dada una cadena con un idioma devuelve el código según el formato aa_AA.utf8
 * @param string $nombre_idioma
 * @return string
 */
function codigo_idioma(string $nombre_idioma):string{
    switch ($nombre_idioma){
        case ("castellano"):
            return 'es_ES.utf8';
        case ("frances"):
            return 'fr_FR.utf8';
        case ("ingles"):
            return 'en_US.utf8';
        default:
            return 'es_ES.utf8';
    }
}

/** Establecemos el idioma a partir de una cadena con su nombre
 * @param string $idioma /el nombre del idioma que queremos establecer
 */
function establece_idioma(string $idioma)
{
    if (!setlocale(LC_ALL, codigo_idioma($idioma))) {
        echo "No se ha podido cargar el idioma $idioma como categoría LC_ALL";
    }
    if (!putenv("LC_ALL=" . codigo_idioma($idioma) . "")) {
        echo "No se ha podido establecer el idioma $idioma en variables de entorno<br />";
    }
    bindtextdomain('fichero', './locale');
}




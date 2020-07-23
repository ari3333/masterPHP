<?php

<<<<<<< HEAD
/* 
Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
 hasta que cierra sesión o cierra el navegador.
 */

// Iniciar la sesión
session_start();

// Variable local
$variable_normal = "Soy una cadena de texto";

// Variable de sesión
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal."<br/>";
=======
/*Sesion: Almacenar y persiistir datos del usuario mientras que navega en un sitio web hasta que cierra sesion o cierra el navegador*/

/*Iniciar sesion*/
session_start();

/*variable local*/
$variable_normal = "Soy una cadena de texto";

/*variable de sesion*/
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal . '<br/>';
>>>>>>> d3252e7f73d293322d11dcae3f153939ad288b4a
echo $_SESSION['variable_persistente'];
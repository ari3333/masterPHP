<?php

if ($_COOKIE['micookie']) {
	unset($_COOKIE['micookie']);
	setcookie('micookie', '', time() - 100); //hay que caducar la cookiee
}

//redirecciones
header('Location:ver_cookies.php');
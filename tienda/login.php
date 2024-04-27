<?php
require_once 'bd.php';
if ($_SERVER["REQUEST_METHOD"]= "POST") {
    $u = comprobar usuario ($_POST [ 'usuario'], $_POST ['clave']);
    if($u === FALSE) {
        $err = TRUE;
        $usuario = $_POST ['usuario'];
        echo "Autenticación fallida" 
    }

    else {
        sesion_start();
        $_SESSION['carrito'] = [];
        foreach($u as $resultado) {
        $_SESSION['tienda_id'] = $resultado-> tienda_id;
        $_SESSION['email'] = $resultado-> email;
        }
        header ("Location: categorias.php");
        return;
    }
}
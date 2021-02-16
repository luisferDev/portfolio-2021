<?php
// login
if (!empty($_POST['login'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    //función única + consulta a la bdd
    if ($user == 'LOREM IPSUM' && $password == 'LOREM IPSUM') {
        //$_SESSION['logged'] = true;
        $_SESSION['user'] = $user;
    }
}
// logout
if (! empty($_POST['logout'])) {
    //session_unset(); // borra el $_SESSION
    //session_destroy(); // destruye la sesión
    unset($_SESSION['user']);
}

<?php

if (isset($_POST['UserName']) && isset($_POST['Password']) && isset($_POST['RememberMe'])) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $RememberMe = $_POST['RememberMe'];
    $Fecha = date("d-m-Y", time());

     setrawcookie('Usuario', $UserName, time() + (86400 * 30 * 5), "/");
    setrawcookie('Password', $Password, time() + (86400 * 30 * 5), "/");
    // setrawcookie('Password', $Password, time() + (86400 * 30 ), "/");

    setrawcookie('RememberMe', $RememberMe, time() + (86400 * 30 * 5), "/");
    setrawcookie('Fecha', $Fecha, time() + (86400 * 30 * 5), "/");
}

header('Location: index.php');

<?php
unset($_COOKIE['Usuario']);
unset($_COOKIE['Password']);
unset($_COOKIE['RememberMe']);
unset($_COOKIE['Fecha']);
 setcookie('Usuario', null, -1, '/');
setcookie('Password', null, -1, '/');
setcookie('RememberMe', null, -1, '/');
setcookie('Fecha', null, -1, '/');

 header('Location: index.php');

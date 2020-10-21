<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Cookies</title>
</head>

<body>

    <?php
    if (isset($_COOKIE['Usuario']) && isset($_COOKIE['Password']) && isset($_COOKIE['RememberMe'])) {
        $cookieUserName = $_COOKIE['Usuario'];
        $cookiePassword = $_COOKIE['Password'];
        $cookieRememberMe = "disabled";
        $Titulo = "Datos almacenados";
        $TituloChecked = "Usuario recordado";
        $TituloOlvidar = "";
        $Fecha = "Ultimo acceso " . $_COOKIE['Fecha'];
        $TituloFecha = "";
        $BotonEnviar = "style='display:none'";
    } else {
         $cookieUserName = "";
        $cookiePassword = "";
         $cookieRememberMe = "";
        $TituloChecked = "Recuerdame";
        $TituloOlvidar = "style='display:none'";
         $TituloFecha = "style='display:none'";
        $Titulo = "Entrar";
         $BotonEnviar = "";
    }
    ?>

    <div class="container mt-5 col-4">

        <form class="text-center border border-light p-5" method="POST" action="cookies.php">

            <p class="h4 mb-4"><?php echo $Titulo; ?></p>
            <p class="h5 mb-4" <?php echo $TituloFecha; ?>><?php echo $Fecha; ?></p>

            <input type="input" name="UserName" class="form-control mb-4" placeholder="Usuario" value="<?php echo $cookieUserName; ?>">

            <input type="password" name="Password" class="form-control mb-4" placeholder="Password" value="<?php echo $cookiePassword; ?>">

            <div class="d-flex justify-content-between">
                <div>
                    <div class="custom-control custom-checkbox">
                         <input type="checkbox" class="custom-control-input" name="RememberMe" id="RememberMe" <?php echo $cookieRememberMe; ?>>
                          <label class="custom-control-label" for="RememberMe"><?php echo $TituloChecked; ?></label>
                    </div>
                </div>

                <div>
                    <a href="olvidar.php" <?php echo $TituloOlvidar; ?>>Olvidar usuario</a>
                </div>

            </div>

            <button class="btn btn-info btn-block my-4" type="submit" <?php echo $BotonEnviar; ?>>Enviar</button>

          </form>

    </div>

   </body>

</html>
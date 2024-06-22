<?php
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado del Login</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class="cuerpo">';

    if($_SERVER ['REQUEST_METHOD'] = "POST")
    {
        //Se declaran el usuario y contraseña requeridas, se deja la edad vacia para verificacion de edad
        $usuario = 'luis';
        $contraseña = 'mendoza';
        $edad = '';

        //Se comprueban que los datos no sean datos vacíos
        $usuario = !empty($_POST['user']) ? $_POST['user'] : 'vacio';
        $contraseña = !empty($_POST['password']) ? $_POST['password'] : 'vacio';
        $edad = !empty($_POST['edad']) ? $_POST['edad'] : 'vacio';

        //Verifica que los datos sean los correctos para ingresar al sitio
        if ($usuario != 'luis' || $contraseña != 'mendoza') //Se verifica que los datos sean los requeridos
        {
            echo '<p class="respuesta">Verifica que los datos sean correctos 😺</p>';

        }
        else if ($edad < 18) //Se verifica que sea mayor de edad
        {
            echo '<p class="respuesta">No se te permite el acceso. Eres menor de edad 😺</p>';

        }
        else //Permite el acceso en caso de cumplir los requisitos
        {
            echo '<p class="respuesta">Login verificado. Bienvenido al sitio 😸</p>';

        }
    }
    else
    {
        echo "Metodo " . $_SERVER['REQUEST_METHOD'];
    }

    echo '</body>
</html>';

?>
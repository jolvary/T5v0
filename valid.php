<?php

session_start();

if ($_POST) {

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    function v_usuario($usuario) {

        if ( strlen(trim($usuario)) > 34 ) {

            return true;

        }

    }

    function v_password($contraseña) {

        $first = 0;
        $second = 1;
        $fibo = array();
        $lenpass = strlen(trim($contraseña));

        for ($i=0;$i<5;$i++) {
            array_push($fibo,$first,$second);
            $first = $second + $first;
            $second = $second + $first;

        }

        if ( ( ($lenpass > 3) and ($lenpass < 35) ) and (in_array($lenpass,$fibo)) ) {

            return true;

        }

    }

    if ( v_password($contraseña)==true or v_usuario($usuario)==true ) {

        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contraseña'] = $contraseña;
        $_SESSION['fecha']=date("y-m-d H:i:s");

        header('Location: page2.php');

    } else {
        echo '<p class="error">No tienes acceso a la siguiente página. Inicie sesión con otro usuario.</p>';
        echo '<a href="inicio.php"><button>Iniciar Sesión</button></a>';
        exit;        
    }

} else {

    echo "se ha producido un error";

}

?>
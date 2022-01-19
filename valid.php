<?php

session_start();

$sesion = $_SESSION['fecha']=date("y-m-d H:i:s");

?>

<?php

$first = 0;
$second = 1;
$fibo = array();

for ($i=0;$i<5;$i++) {
    array_push($fibo,$first,$second);
    $first = $second + $first;
    $second = $second + $first;
}

var_dump($fibo);

if ($_POST) {

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $lenusu = strlen(trim($usuario));
    $lenpass = strlen(trim($contraseña));

    if ( ( ($lenpass > 3) & ($lenpass < 35) & (in_array($lenpass,$fibo)) ) or ($lenusu > 34) ) {

        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contraseña'] = $contraseña;

        header('Location: page2.php');

    } else {
        echo '<p class="error">No tienes acceso a la siguiente página. Inicie sesión con otro usuario.</p>';
        echo '<a href="inicio.php"><button>Iniciar Sesión</button></a>';
        exit;        
    }

} else {

    echo "se ha producido un error";

}
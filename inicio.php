<?php

session_start();

$sesion = $_SESSION['fecha']=date("y-m-d H:i:s");

?>

<HTML>

<h1> Bienvenido a la página de inicio. </h1>

<?php

$first = 0;
$second = 1;
$fibo = array();

for ($i=0;$i<80;$i++) {
    array_push($fibo,$first,$second);
    $first = $second + $first;
    $second = $second + $first;
}

if (isset($_POST['login'])) {

    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $lenpass = strlen(trim($password));
    $lenusu = strlen(trim($usuario));

    if ( ( ($lenpass > 3) & ($lenpass < 35) & (in_array($lenpass,$fibo)) ) or ($lenusu > 34) ) {

        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contraseña'] = $password;

        header('Location: page2.php');

    } else {
        echo '<p class="error">No tienes acceso a la siguiente página. Inicie sesión con otro usuario.</p>';
        echo '<a href="inicio.php"><button>Iniciar Sesión</button></a>';
        exit;        
    }
}

?>

<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Contraseña</label>
        <input type="password" name="contraseña" required />
    </div>
    <button type="submit" name="login" value="login">Entrar</button>
</form>

</HTML>
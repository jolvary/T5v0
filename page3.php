<HTML>

    <?php

    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        $usuario = $_SESSION['usuario'];
                    
            echo 'El usuario inició sesión por última vez el : '.$_SESSION['fecha'];

            echo '<br><br><br>','Para volver a la página anterior pulse el siguiente botón: ';
            
            echo '<a href="page2.php"><button>Página anterior</button></a>';

            echo '<br><br><br>','Si desea volver a iniciar sesión pulse el siguiente botón: ';
            
            echo '<a href="inicio.php"><button>Inicio</button></a>';

    } else {

        echo "Vuelva a iniciar sesión para acceder a esta página.";

        echo '<a href="inicio.php"><button>Iniciar Sesión</button></a>';
        
    }

    ?>

</HTML>
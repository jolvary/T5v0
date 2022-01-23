<HTML>

    <?php

#        if ($_SESSION) {
#            var_dump($_SESSION);
#        }

        session_start();

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        $password = $_SESSION['contraseña'];

        function c_piramide($password) {

            $lenpass = strlen(trim($password));
                        
            for ($i=0;$i<$lenpass;$i++) {
              
                if ( $i % 2 != 0) {

                    echo str_repeat('¿', $i),"<br>\n";

                } else {

                    echo str_repeat('?', $i),"<br>\n";

                }
                    
            }

        }

        function b_piramide($password) {

            $lenpass = strlen(trim($password));

            for($i = 1; $i < $lenpass; $i += 2) {
                
                $password[$i] = '#';
                
            }

            for($i = 4; $i < $lenpass; $i += 5) {
                
                $password[$i] = '*';
                
            }

            return $password;

        }
            
            echo $_SESSION['usuario'], "<br><br>";
            
            echo c_piramide($password);

            echo b_piramide($password);

            echo '<br><br><br>','Para ves más información sobre la cuenta pulse sobre el siguiente botón: ';
            
            echo '<a href="page3.php"><button>Más Información</button></a>';

            echo '<br><br><br>','Si desea volver a iniciar sesión pulse el siguiente botón: ';
            
            echo '<a href="inicio.php"><button>Login</button></a>';

        }
        else {
            echo "Vuelva a iniciar sesión para acceder a esta página.";

            echo '<a href="inicio.php"><button>Iniciar Sesión</button></a>';
        }

    ?>



</HTML>
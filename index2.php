<?php
    //Evitar los warnings de las variables no definidas !!!
    $err=isset($_GET['error']) ? $_GET['error'] : null;
?>

<!doctype html>
<html lang="esp">
    
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- hago la adaptacion de pantalla -->
            <meta name="viewport" content="width=device-width"/>
        <!-- finalizo la adaptacion de pantalla -->
        
        <!-- coloco la fonts de google -->
            <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>  
        <!-- finalizo la fonts de google -->
        
        <!-- redirecciono a la hoja de estilo ubicada en el directorio css -->
            <link rel='stylesheet' type='text/css' href="css/index2.css"/>
        <!-- finalizo el redireccionamiento de la hoja de estilo -->
        
        
    </head>
    
    <body>
        <form name="formulario" action="session_init.php" method="POST">
            <?php 
                if($err==1)
                    {
                        echo "Usuario o Contrase&ntilde;a Err&oacute;neos <br/>";
                    }
                if($err==2)
                    {
                        echo "Debe iniciar sesi&oacute;n para poder acceder el sitio. <br/>";
                    }
            ?>
            <h1>Logueo de Usuarios</h1>
            <input  type="text"     name="usern" max-length="20" 
                    placeholder="Ingrese su legajo" autocomplete="off" required/>
            <input  type="password" name="passwd" max-length="20" 
                    placeholder="Ingrese su password"   autocomplete="off" required/>
            <button type="button">Registrarse   </button>
            <button type="submit">Iniciar       </button>
        </form>
        
        <script>
            $(document).ready(function()
                {
                    $('#form_test').html5form(
                        {
                            allBrowsers : true,
                            responseDiv : '#response',
                            messages: 'es',
                            method : 'GET',
                            colorOn :'#6b6764',
                            colorOff :'#0d85a5'
                        }
                    );
                }
            );
        </script>
        
    </body>
</html>

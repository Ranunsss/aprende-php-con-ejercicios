<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
  <div id="container">
      <div id="header">
        <h1>
          APRENDE PHP CON EJERCICIOS
        </h1>
                    <h2>
                            SOLUCIONES A LOS EJERCICIOS
                    </h2>
        <h2>
                        <br>1. Salida por pantalla y variables
        </h2>
      </div>

      <div id="content">
                <?php
                    $nombre = "Luis José Sánchez González";
        echo $nombre;
                ?>
                
                <br><br><hr><br>Código fuente:<br>
                <?php
    highlight_string('
        <?php
      $nombre = "Luis José Sánchez González";
      echo $nombre;
        ?>
    ');
                ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>

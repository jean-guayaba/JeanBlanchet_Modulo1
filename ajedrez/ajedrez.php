<html> 
  <body>
  <?php
    //tabla y borde. 
    echo "<table border=\"1\">";
        //El valor de la variable dimensiones se divide entre 2, pues el valor se repite por los ciclos for
      $dimensiones=8;
      $dimensiones=$dimensiones/2;

        //establece los ciclos totales 
      for ($a=1; $a <=$dimensiones ; $a++) {
          echo "<tr>";
          //casillas iniciando en negro
          for ($i=1; $i <=$dimensiones ; $i++) { 
              echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
              echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
          echo "</tr>";
          //ciclo para que se intercalen los colores
          for ($i=1; $i <=$dimensiones ; $i++) { 
              echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
              echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
      }
      echo "</table>";
    ?>
  </body>
  </html>
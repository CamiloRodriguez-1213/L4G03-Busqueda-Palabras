
<!DOCTYPE html >
<html >
  <head>
    <title> Busqueda </title >
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>
    <body>
    <?php
      
      $Entrada=array("correcaminos","hola,mundo,correr,camino,corre,caminos");
      echo("Palabra a buscar: "."<br>".$Entrada[0]);
      ?>
      <br><br>
      <?php
      $array=explode(",",$Entrada[1]);
      echo("Palabras puestas para buscar: ");
      ?>
      <br><br>
      <?php
      for($i=1;$i<count($Entrada);$i++)
      {
      echo $Entrada[$i]."\n";
      }
        echo "<br>";
        $palabra="";
        ?>
        <br><br>
        <?php

        echo("Palabra Encontrada: ")."<br><br>";
      for($i=0;$i<count($array);$i++)
      {
          for($j=0;$j<count($array);$j++)
          {
            if ($j!=$i)
            {
              $palabra=$array[$i].$array[$j];
              if ($palabra==$Entrada[0])
              {
                echo $array[$i]."".$array[$j];
              }
            }
          }
      }  


  ?>
      </body>
</html >
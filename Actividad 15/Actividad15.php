<?php
    if (isset($_FILES["imagen"])){
        $autor=(isset($_POST["autor"]) && $_POST["autor"]!="") ? $_POST["autor"]:"Sin autor";
        $año=(isset($_POST["año"]) && $_POST["año"]!="") ? $_POST["año"]:"Sin año";
        $obra=$_POST["obra"];

        $arch= $_FILES["imagen"]["tmp_name"];
        $name= $_FILES["imagen"]["name"];
        $ext=pathinfo($name,PATHINFO_EXTENSION);
            if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
            {
               rename($arch, './statics/'.$obra."$".$autor."$".$año."$." .pathinfo($name,PATHINFO_EXTENSION));
               echo "<h1> Se cargo la imagen correctamente </h1>
                <form action='./Galeria.php' method='POST'>
                <button type='submit'>Ver galería</button>
                </form>"; 
            }
            else
            {
                echo "<h1>No se pudo cargar la obra. Revise la extensión (png, jpg o jpeg)</h1>"; 
                echo "<form action='./Actividad Galeria.html' method='POST'>
                <button type='submit'>Subir obra a mi galería</button>
                </form>";
                
            }
            
        }
        else
        {
            $ruta="./statics";//ruta para guardar las imgs
            $carpeta= opendir($ruta);
            $archivos = array();
            $hay_archivos= true;
            $i=0;
            while($hay_archivos)
            {
                $archivo2 = readdir($carpeta);//lee los contenidos de la carpeta
                if($archivo2 !== false)
                {
                    $extension= pathinfo($archivo2, PATHINFO_EXTENSION);
                    if($archivo2 !="." && $archivo2 !=".." && ($extension=="jpg" || $extension=="jpeg" || $extension=="png"))
                    {
                        $i++;
                        array_push($archivos, $archivo2);   
                    }
                }
                    
                else
                {
                    $hay_archivos=false;
                }
            }
            if($i!=0)
            {
                echo "<h1>-IMAGENES EN LA GALERÍA DE ARTE-</h1>";
                echo "<table border='1'align='center' style='width:auto'>";
                echo "<tr>";
                foreach($archivos as $llave => $value)
                {
                    if($llave%2==0)
                    {
                        echo "<tr>";
                    }
                    echo "<td><img src='./statics/".$value."'width='300' height='300' alt='Soy una imagen'>";
                    $value2=strtoupper($value);
                    $nombre_obra=explode("$",$value2);
                    echo "<ul>
                        <li><strong>Nombre de la pintura:</strong>".$nombre_obra[0]."</li>
                        <li><strong>Nombre del pintor:</strong>".$nombre_obra[1]."</li>
                        <li><strong>Año en que se realizo:</strong>".$nombre_obra[2]."</li>
                    </li></td>";
                    if($llave%2==1)
                    {
                        echo "</tr>";
                    }
                }
                echo "</table>";
            }
            else
            {
                echo "<h1>-TU GALERÍA DE ARTE NO TIENE NINGUNA IMAGEN-</h1>";
            }
            echo "<form action='./Actividad Galeria.html' method='POST'>
            <button type='submit'>Subir obra a mi galería</button>
            </form>";
            closedir($carpeta);
        }
?>
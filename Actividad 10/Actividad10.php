 <?php

    $nom = (isset($_POST["Nom"]) && $_POST["Nom"] != "" ) ?$_POST["Nom"] : "No especifico";
    $apP = (isset($_POST["ApP"]) && $_POST["ApP"] != "" ) ?$_POST["ApP"] : "No especifico";
    $apM = (isset($_POST["ApM"]) && $_POST["ApM"] != "" ) ?$_POST["ApM"] : "No especifico";
    $se = (isset($_POST["sexo"]) && $_POST["sexo"] != "" ) ?$_POST["sexo"] : "No especifico";
    $ed = (isset($_POST["Ed"]) && $_POST["Ed"] != "" ) ?$_POST["Ed"] : "No especifico";
    $mail = (isset($_POST["mail"]) && $_POST["mail"] != "" ) ?$_POST["mail"] : "No especifico";
    $tel = (isset($_POST["Tel"]) && $_POST["Tel"] != "" ) ?$_POST["Tel"] : "No especifico";
    $cel = (isset($_POST["Cel"]) && $_POST["Cel"] != "" ) ?$_POST["Cel"] : "No especifico";
    $esc = (isset($_POST["Escuela"]) && $_POST["Escuela"] != "" ) ?$_POST["Escuela"] : "No especifico";
    $prom = (isset($_POST["Prom"]) && $_POST["Prom"] != "" ) ?$_POST["Prom"] : "No especifico";
    $po = (isset($_POST["Po"]) && $_POST["Po"] != "" ) ?$_POST["Po"] : "No especifico";
    $so = (isset($_POST["So"]) && $_POST["So"] != "" ) ?$_POST["So"] : "No especifico";

   echo "<table border=\"1\">";
        echo "<thead>";
            echo "<tr>";
                echo "<th colspan=\"4\" style=\"text-align:center\"><h2><br>Solicitud de ingreso a la Universidad</h2></th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            echo "<tr>";
                echo "<td style=\"text-align:center\">$apP</td>";
                echo "<td style=\"text-align:center\">$apM</td>";
                echo "<td colspan=\"2\" style=\"text-align:center\">$nom</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td style=\"text-align:center\"><strong><u>Apellido Paterno</u></strong></td>";
                echo "<td style=\"text-align:center\"><strong><u>Apellido Materno</u></strong></td>";
                echo "<td colspan=\"2\" style=\"text-align:center\"><strong><u>Nombre(s)</u></strong></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td style=\"text-align:center\"><strong><u>Sexo:</u></strong></td>";
                echo "<td style=\"text-align:center\">$se</td>";
                echo "<td style=\"text-align:center\"><strong><u>Edad:</u></strong></td>";
                echo "<td style=\"text-align:center\">$ed</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td style=\"text-align:center\">$mail</td>";
                echo "<td style=\"text-align:center\">$tel</td>";
                echo "<td colspan=\"2\" style=\"text-align:center\">$cel</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td style=\"text-align:center\"><strong><u>Correo electrónico</u></strong></td>";
                echo "<td style=\"text-align:center\"><strong><u>Teléfono</u></strong></td>";
                echo "<td colspan=\"2\" style=\"text-align:center\"><strong><u>Celular</u></strong></td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td style=\"text-align:center\"><strong><u>Escuela de procedencia:</u></strong></td>";
                echo "<td style=\"text-align:center\">$esc</td>";
                echo "<td style=\"text-align:center\"><strong><u>Promedio:</u></strong></td>";
                echo "<td style=\"text-align:center\">$prom</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td style=\"text-align:center\"><strong><u>Primera opción:</u></strong></td>";
                echo "<td colspan=\"3\" style=\"text-align:center\">$po</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td style=\"text-align:center\"><strong><u>Segunda opción:</u></strong></td>";
                echo "<td colspan=\"3\" style=\"text-align:center\">$so</td>";
            echo "</tr>";       
        echo "</tbody>";
 ?>
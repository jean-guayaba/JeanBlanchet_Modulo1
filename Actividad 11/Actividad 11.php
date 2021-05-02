<?php
    $res=array($_POST["Pregunta1"], $_POST["Pregunta2"],$_POST["Pregunta3"], $_POST["Pregunta4"], $_POST["Pregunta5"], $_POST["Pregunta6"], $_POST["Pregunta7"], $_POST["Pregunta8"], $_POST["Pregunta9"], $_POST["Pregunta10"]);
    sort($res);
    $a=0;
    $b=0;
    $c=0;
    $d=0;
    foreach($res as $llave => $valor){
        if($valor == 'A')
            $a++;
        if($valor == 'B')
            $b++;
        if($valor == 'C')
            $c++;
        if($valor == 'D')
            $d++;
    }

    echo "Felicidades, eres un: ";

    if($a>$b && $a>$c && $a>$d)
        echo "Taco al pastor";
    else if($b>$a && $b>$c && $b>$d)
        echo "Taco de suadero";
    else if($c>$a && $c>$b && $c>$d)
        echo "Taco de barbacoa";
    else if($d>$a && $d>$b && $d>$c)
        echo "Taco Lagunero";
    else if($b==$a && $a>$c && $a>$d)
        echo "Taco campechano";
    else if($b==$c && $b>$a && $b>$d)
        echo "Taco de carnitas";
    else if($d==$c && $c>$a && $c>$b)
        echo "Taco de carnitas";
    else if($d==$a && $a>$c && $a>$b)
        echo "Taco light";
    else if($c==$a && $c>$b && $c>$d)
        echo "Taco light";
    else if($b==$d && $b>$c && $b>$a)
        echo "Taco light";
    else
        echo "Taco de sal"       
?>
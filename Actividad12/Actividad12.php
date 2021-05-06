<?php
    $ABC=["A", "B", "C", "D", "E", 
        "F", "G", "H", "I", "J", 
        "K", "L", "M", "N", "O", 
        "P", "Q", "R", "S", "T", 
        "U", "V", "W", "X", "Y", "Z",
        "1", "2", "3", "4", "5", 
        "6", "7", "8", "9", "0",
        ".", ",", "?", '"', "/", " "];

    $abcd=["a", "b", "c", "d", "e", 
        "f", "g", "h", "i", "j", 
        "k", "l", "m", "n", "o", 
        "p", "q", "r", "s", "t", 
        "u", "v", "w", "x", "y", "z",
        "1", "2", "3", "4", "5", 
        "6", "7", "8", "9", "0",
        ".", ",", "?", '"', "   ", " "];
   
    $morse=[".-", "-...", "-.-.", "-..", ".", 
            "..-.", "--.", "....", "..", ".---", 
            "-.-", ".-..", "--", "-.", "---", 
            ".--.", "--.-", ".-.", "...", "-", 
            "..-", "...-", ".--", "-..-", "-.--", "--..",
            ".----", "..---", "...--", "....-", ".....",
            "-....", "--...", "---..", "----.","-----",
            ".-.-.-", "-.-.--", "..--..", ".-..-.", "   ", " "];
    
    $texE=$_POST['text'];
    $separadoE= str_split($texE); 
    $texM=$_POST['text'];
    $separadoM= explode(" ", $texM); 

    $i=0;
    $j=0;
    $k=0;
    $h=0;
    $s=0;
   
    if($_POST["Select"] == "1")
    {
        for($i=0; $i < count($separadoM); $i++)
        {
            for($j=0; $j < count($morse); $j++)
            {
                if($morse[$j] == $separadoE[$i] && $s!=1)
                {
                    echo "Ha escrito de forma incorrecta su texto";
                    $s=1;
                }
            }
        }
        if($s!=1){
            echo "su texto a traducir es:     ", "$text";
            echo "<br><br>";
            echo "su traduccion es: ";
            echo "<br><br>";
            for($i=0; $i < count($separadoE); $i++)
            {
                for($j=0; $j < count($ABC); $j++)
                {
                    if($ABC[$j] == $separadoE[$i] || $abcd[$j] == $separadoE[$i])
                    {
                        echo $morse[$j];
                        echo " ";
                    }
                }
                echo "   ";
            }
        } 
    }

    elseif($_POST["Select"] == "2")
    {
        for($i=0; $i < count($separadoM); $i++)
        {
            for($j=0; $j < count($morse); $j++)
            {
                if($ABC[$j] == $separadoM[$i] || $abcd[$j] == $separadoM[$i] && $h!=1)
                {
                    echo "Ha escrito de forma incorrecta su texto en morse";
                    $h=1;
                }
            }
        }
        if($h != 1){
            echo "su texto a traducir es: ", "$texM";
            echo "<br><br>";
            echo "su traduccion es: ";
            echo "<br><br>";
            for($i=0; $i < count($separadoM); $i++)
            {
                for($j=0; $j < count($morse); $j++)
                {
                    if($morse[$j] == $separadoM[$i])
                    {
                        echo $ABC[$j];
                    }
                }
            }
        }
    }
?>

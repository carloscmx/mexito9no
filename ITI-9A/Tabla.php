<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla condicional</h1>
    <?php
    function muestra($valor){
        $renglon=0;
        if($renglon %2 ){
            $fondo="#eeeeee";
        }else{
            $fondo="#dddddd";
        }
        if($valor<0.5){
            $color="red";
        }else{
            $color="blue";
        }
        echo "<td bgcolor='$fondo'><font color='$color'>$valor<font></td>\n";
    }
    ?>
     <table border="1">
    <?php
   
    for($x=0.1; $x<=2; $x=$x+0.1){
        echo "<tr>";
     //   echo $x;
       echo   muestra($x);
       echo muestra(sin($x));
       echo muestra(cos($x));
        echo "</tr>";
    }
   ?>
    
    </table>
</body>
</html>
<?php
$titulo=" Ejercicio 2";
$subtitulo=" Practica 2- Serie de Lucas y Fibbonacci.";
$instruccion=" Inserte un número en cada caja de texto y pulse en calcular.";
$objetivo=" El sistema generá ambas series depediendo de la longitud deseada.";
$validarinput=1;
include_once("masterpage/head.php");
?>


<form action="ejercicio2.php" method="POST">
	<table style="text-align: center;">
	<tr>
	<td>
    <label>Ingresar la longitud de la serie de Lucas</label>
    <input type="text" name="textlucas" required pattern="[0-9]+" class="form-control"> 
    </td>
	</tr>

	<tr>
	<td>
    <label>Ingresar la logitud de la serie de Fibonacci</label>
    <input type="text" name="textfibo" required pattern="[0-9]+" class="form-control">
    </td>
	</tr>
	<tr>
		<td> <input type="submit" value="calcular" class="btn btn-success"> </td>
	</tr>
</table>
</form>

<?php
	if($_POST)
	{	
		$nlucas = $_POST
        ['textlucas'];
        
		$nfibo = $_POST
       ['textfibo'];

       echo "Longitud de Lucas: ".$nlucas;
       echo "<br>";
       echo "<br>";

       $n = $nlucas;
      $n1 =2; 
      $n2 =1;
      $n3 = 0;
      
      if($n>1)
      echo "\n2";
      echo "<br>";
      echo "\n1";
      
      for($i= 2; $i < $n; $i++){
          $n3 = $n2;
          $n2 +=$n1;
          $n1 = $n3;
          echo "<br>";
          echo $n2;
      
      }

      echo "<br>";
      echo "<br>";

       echo "Longitud de Fibbonacci: ".$nfibo;
      echo "<br>";
      echo "<br>";

       $a = 0;
       $b = 1;
      
       $v = 0;
      
       $cont = 1;
        do{
         echo $v."<br>";
         $a = $b; //1
         $b = $v; //1
         $v = $a + $b; //1 +1 = 2
      
         $cont++;
       }while($cont <= $nfibo);

     
    } 

    
?>
<?php
include_once("masterpage/footer.php");
?>
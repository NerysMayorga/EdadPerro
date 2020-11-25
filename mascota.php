<?php
if(isset($_POST["Numero"]))
{
 $numero = $_POST['Numero'];

$resultado = 7*($numero); 
}
//function edad ($numero) {
 // $numero=numero*7;
  //return numero;

//} 


?>
<!DOCTYPE html >
<html lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Cálculo de la edad Canina</title>
<form name="form1" method="post" action="">
  <p>
    <label for="Numero"></label>
    Numero <input type="text" name="Numero" id="Numero" placeholder="Escribe la edad de tu mascota en años humanos">
  </p>
  <p>
    <label for="Result">Su edad es</label>
      <input name="Result" type="text" id="Result" value=" <?php echo $resultado; ?>" > 

  </p>
    <input type="submit" name="Enviar" id="Enviar" value="Enviar">

</form>
</html>
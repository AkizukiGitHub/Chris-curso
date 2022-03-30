<?php
include("includes/nav.php");

?>
<?php
getdate();
  $hoy = getdate();
  $min = $hoy['year']."-0".$hoy['mon']."-".$hoy['mday'];
  $max = ($hoy['year']+10)."-12-31";

  print_r($min);
  echo "<br>";
  print_r($max);

 echo 
 "<form action='' method='post'>
    <section style='margin-left: 20%; margin-right: 20%;'>
      <fieldset style='width: 100%'>
        <label>Email:</label><input type='email' name='email' /><br /><br />
        <label>Nombre : </label><input type='text' name='fname' /><span style='color: red;'>*</span><br /><br />
        <label>Apellido : </label><input type='text' name='lname' /><span style='color: red;'>*</span><br /><br />
        <label> Fecha de nacimiento:</label>
        <input type='date' name='fnac' min='$min' max='$max'/><br/>
        <br>
        <label>Sexo:</label><br/>
        <input type='radio' name='gender' value='Masculino' /><label>Masculino</label><br />
        <input type='radio' name='gender' value='Femenino' /><label>Femenino</label><br />
        <input type='radio' name='gender' value='Sin especificar' /><label>Prefiero no decirlo</label><br />
      </fieldset>
      <input type='submit' value='Enviar' />"
?>

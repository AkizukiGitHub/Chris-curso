<?php
include("includes/nav.php");

?>

<?php
  getdate();
  $hoy = getdate();
  $min = ($hoy['year']-18)."-0".$hoy['mon']."-".$hoy['mday'];

echo
"<form>
    <section style='margin-left: 20%; margin-right: 30%;'>
        <h3>Paso 1</h3>
        <legend class='border border-dark'>Datos personales
            <fieldset style='width: 100%'>
                <label>Email:</label><input type='email' name='email' /><br /><br />
                <label>Nombre : </label><input type='text' name='fname' /><span style='color: red;'>*</span><br /><br />
                <label>Apellido : </label><input type='text' name='lname' /><span style='color: red;'>*</span><br /><br />
                <label>Sexo:</label><br/>
                <input type='radio' name='gender' value='Masculino' /><label>Masculino</label><br />
                <input type='radio' name='gender' value='Femenino' /><label>Femenino</label><br />
                <input type='radio' name='gender' value='Sin especificar' /><label>Prefiero no decirlo</label><br />
                <label>Fecha de nacimiento:</label>
                <input type='date' name='fnac' max='$min'/><br/>
            </legend>
        </fieldset>
        <input type='submit' value='Enviar' />
    </section>
</form>";
?>

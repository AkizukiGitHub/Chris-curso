<?php
// Conecta con la BD
    include 'conexion.php';
  $c=htmlspecialchars($_POST['email']);
// sql para consultar una tabla
  $sql = "call dime_clave('$c') ";
  $resultado = mysqli_query($conexion, $sql);  

if (mysqli_num_rows($resultado) > 0) {
  // Salida de datos para cada fila
  while($row = mysqli_fetch_assoc($resultado)) {
    echo "password: " . $row["pass"]. "<br>";
  }
} else {
  echo "Sin resultados";
}

//cierra la conexión con la BD
mysqli_close($conexion);
?>



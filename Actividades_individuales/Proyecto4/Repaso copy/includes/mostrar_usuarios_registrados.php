<?php
// Conecta con la BD
  include 'conexion.php';
  //$c=htmlspecialchars($_POST['email']);
// sql para consultar una tabla
  $sql = "Select * from usuario ";
  $resultado = mysqli_query($conexion, $sql);  

if (mysqli_num_rows($resultado) > 0) {
  // Salida de datos para cada fila
  while($row = mysqli_fetch_assoc($resultado)) {
    echo "id:" . $row["id"]. "email:" . $row["email"]. "password:" . $row["pass"]. "<br>";
  }
} else {
  echo "Sin resultados";
}

//cierra la conexión con la BD
mysqli_close($conexion);
?>



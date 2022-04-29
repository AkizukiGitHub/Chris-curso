<?php
// Conecta con la BD
    include 'conexion.php';
// sql para consultar una tabla
  $sql = "SELECT * FROM clientes WHERE provincia = 'Santa Cruz de Tenerife'";
  $resultado = mysqli_query($conexion, $sql);  

if (mysqli_num_rows($resultado) > 0) {
  // Salida de datos para cada fila
  while($row = mysqli_fetch_assoc($resultado)) {
    echo "Id:" . $row["id"]. "NIF" . $row["NIF"]. "nombre:".$row["nombre"]. "direccion:". $row["direccion"]. "CP". $row["CP"]. "poblacion".$row["poblacion"]. "provincia". $row["provincia"]. "telefono". $row["telefono"]. "<br>";
  }
} else {
  echo "Sin resultados";
}

//cierra la conexión con la BD
mysqli_close($conexion);
?>



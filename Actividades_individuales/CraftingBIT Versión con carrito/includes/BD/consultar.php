<?php
    // 1. Conecta con la BD
    include 'conexion.php';

  /* 2. Crea la instrucción sql para consultar una tabla. Ejemplo:
  $sql = "SELECT * FROM usuario where nick like 'x%' ";*/
  $sql = "";
  
  //3. Hacemos la consulta
  $resultado = mysqli_query($conexion, $sql);  
  // 4. Preguntamos si hay resultados
  if (mysqli_num_rows($resultado) > 0) {
  // 5. Si hay resultados recorremos cada fila con un bucle y la función mysqli_fetch_assoc()
    while($row = mysqli_fetch_assoc($resultado)) {
      //mostramos los resultados
      echo "id: " . $row["id"]. " Nick: " . $row["nick"]. "Email " . $row["email"]. "Clave:" . $row["clave"]."<br>";
      // var_dump($row);
    }
  } else {
    echo "Sin resultados";
  }

  //cierra la conexión con la BD
  mysqli_close($conexion);

?>



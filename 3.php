<html>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "academia") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "INSERT INTO notas(nombre,identificacion,calificacion) VALUES
                       ('$_REQUEST[nombre]','$_REQUEST[identificacion]',$_REQUEST[calificacion])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);
 
 
  

        header('Location:registro_notas1.php');    
  ?>




</body>

</html>
<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../Login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intántalo de nuevo, usuario no almacenado");
                window.location = "../Login.php";
            </script>
        ';
    }

    mysqli_close($conection);
?>
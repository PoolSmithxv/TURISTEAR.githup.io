<?php
    include("conexion.php");

    if (isset($_POST['register'])) {
        if (
                strlen($_POST['name']) >= 1 &&
                strlen($_POST['email']) >= 1 &&
                strlen($_POST['telefono']) >= 1 &&
                strlen($_POST['password']) >= 1
            ) {
                    $name = trim($_POST['name']);
                    $email = trim($_POST['email']);
                    $telefono = trim($_POST['telefono']);
                    $password = trim($_POST['password']);
                    $fecha = date("d/m/y");
                    $consulta = "INSERT INTO datos(nombre, email, telefono, contraseña, fecha)
                        VALUES ('$name', '$email', '$telefono', '$password', '$fecha')";
                    $resultado = mysqli_query($conex, $consulta);
                    if ($resultado) {
                        echo '<script>alert("Registro Completado.\nSe esta redireccionando a otra Pagina"); window.location.href = "/turistea/index.html";</script>';
                        exit();
                    } 
            } 
    }
?>
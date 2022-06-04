<?php
include("conexion.php");
$ruta = "../../img/";
//insertar

if (isset($_POST['Enviar']) and $_POST['Enviar'] === "Guardar") {
    $id = $_POST['id'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $usr = $_POST['usuario'];
    $pwd = $_POST['pwd'];
    





    if (empty($id)) {
        $sql = "INSERT INTO usuarios (nombres,apellidos,usuario,clave) VALUES ('$nombre','$apellido','$usr','$pwd')";
        if ($conn->query($sql)) {
            echo "<script>
            
            alert('Producto Guardado correctamente');
            window.location.href= '../FormularioPro.php';
            </script>";
        } else {
            echo "<script>
            
            alert('Error al Guardar el Usuario');
            window.location.href= '../FormularioPro.php';
            </script>";
        }
    }else if (empty($id)) {

        if (empty($nombreArchivo)) { //  si el archivo esta vacio
            $sql = "UPDATE usuarios set nombre = '$nombre', apellidos='$apellido',usuario='$usr',clave='$pwd' where id=$id;";
            if ($conn->query($sql)) {
                echo "<script>
                
                alert('Usuario Actualizado correctamente');
                window.location.href= '../FormularioPro.php';
                </script>";
            } else {
                echo "<script>
                
                alert('Error al Actualizar el Usuario');
                window.location.href= '../FormularioPro.php';
                </script>";
            }
        } elseif (!empty($nombreArchivo)) { // si el archivo no está vacio
            $sql = "UPDATE productos usuarios set nombre = '$nombre', apellidos='$apellido',usuario='$usr',clave='$pwd' where id=$id;";
            if ($conn->query($sql)) {
                echo "<script>
                
                alert('Usuario Actualizado correctamente');
                window.location.href= '../FormularioPro.php';
                </script>";
            } else {
                echo "<script>
                
                alert('Error al Actualizar el Usuario');
                window.location.href= '../FormularioPro.php';
                </script>";
            }
        }
    }




    $conn->close();
} else if (isset($_POST['Enviar']) and $_POST['Enviar'] === "Eliminar") {
    $id = $_POST['id'];
    $sql = "DELETE FROM usuario WHERE id = $id;";
    if ($conn->query($sql)) {
        echo "<script>
        
        alert('Usuario Eliminada correctamente');
        window.location.href= '../ListaPro.php';
        </script>";
    } else {
        echo "<script>
        
        alert('Error al Eliminar el Usuario');
        window.location.href= '../ListaPro.php';
        </script>";
    }
}


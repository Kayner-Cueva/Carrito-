<?php
include("conexion.php");
$ruta = "../../img/";
//insertar

if (isset($_POST['Enviar']) and $_POST['Enviar'] === "Guardar") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    // $idCategoria = $_POST['idCategoria'];
    // if (!empty($_FILES["foto"]["name"])) {
    //     $nombreArchivo = $_FILES["foto"]["name"];

    //     $ruta = $ruta . basename($_FILES["foto"]["name"]);
    //     if (!(move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta))) {
    //         echo "error al cargar el archivo";
    //         return false;
    //     }
    // }





    if (empty($id)) {
        $sql = "INSERT INTO productos (nombre,marca,detalle,precio,stock,) VALUES ('$nombre','$detalle',$precio,$stock,)";
        if ($conn->query($sql)) {
            echo "<script>
            
            alert('Producto Guardado correctamente');
            window.location.href= '../FormularioPro.php';
            </script>";
        } else {
            echo "<script>
            
            alert('Error al Guardar el Producto');
            window.location.href= '../FormularioPro.php';
            </script>";
        }
    }else if (empty($id)) {

        if (empty($nombreArchivo)) { //  si el archivo esta vacio
            $sql = "UPDATE productos set nombre = '$nombre',marca='$marca', detalle='$detalle',precio=$precio,stock=$stock where id=$id;";
            if ($conn->query($sql)) {
                echo "<script>
                
                alert('Producto Actualizado correctamente');
                window.location.href= '../FormularioPro.php';
                </script>";
            } else {
                echo "<script>
                
                alert('Error al Actualizar el Producto');
                window.location.href= '../FormularioPro.php';
                </script>";
            }
        } elseif (!empty($nombreArchivo)) { // si el archivo no está vacio
            $sql = "UPDATE productos set nombre = '$nombre',marca='$marca', detalle='$detalle',precio=$precio,stock=$stock where id=$id;";
            if ($conn->query($sql)) {
                echo "<script>
                
                alert('Producto Actualizado correctamente');
                window.location.href= '../FormularioPro.php';
                </script>";
            } else {
                echo "<script>
                
                alert('Error al Actualizar el Producto');
                window.location.href= '../FormularioPro.php';
                </script>";
            }
        }
    }




    $conn->close();
} else if (isset($_POST['Enviar']) and $_POST['Enviar'] === "Eliminar") {
    $id = $_POST['id'];
    $sql = "DELETE FROM productos WHERE id = $id;";
    if ($conn->query($sql)) {
        echo "<script>
        
        alert('Producto Eliminada correctamente');
        window.location.href= '../ListaPro.php';
        </script>";
    } else {
        echo "<script>
        
        alert('Error al Eliminar el Producto');
        window.location.href= '../ListaPro.php';
        </script>";
    }
}


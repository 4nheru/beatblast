<?php

require_once 'helper/clsConexion.php';
class Productos
{
    private $_nombre;
    private $_descripcion;
    private $_precio;
    private $_foto;

    public function setDatos($nom, $des, $pre, $fot)
    {
        $this->_nombre = $nom;
        $this->_descripcion = $des;
        $this->_precio = $pre;
        $this->_foto = $fot;
    }

    public function insertarProducto()
    {
        try {
            $nombreFoto = $this->_foto['foto']['name'];
            $rutaDirectorio = 'vista/catalogo/productos/';
            $rutaCompleta = $rutaDirectorio . $nombreFoto;

            if (!file_exists($rutaDirectorio)) {
                mkdir($rutaDirectorio, 0777, true);
            }

            move_uploaded_file($this->_foto['foto']['tmp_name'], $rutaCompleta);

            $sql = "INSERT INTO audifonos(nombre, descripcion, precio, foto) VALUES(
            '$this->_nombre',
            '$this->_descripcion',
            '$this->_precio',
            '$rutaCompleta'
        )";
            $res = $this->_aplicarQuery($sql);
            return $res;
        } catch (Exception $e) {
            echo "Error en la consulta: " . $e->getMessage();
        }
    }

    public function traerAudifonos()
    {
        try {
            $sql = "select * from audifonos";
            $resultados = $this->_aplicarQuery($sql);
            return $resultados;
        } catch (Exception $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }

    public function cancelarProducto()
    {
        // Obtener el ID del producto antes de eliminarlo
        $sql_select = "SELECT id FROM audifonos WHERE nombre = '$this->_nombre'";
        $res_select = $this->_aplicarQuery($sql_select);
        $producto = $res_select->fetch_assoc();
        $producto_id = $producto['id'];

        // Eliminar las reseñas relacionadas con el producto
        $sql_delete_reseñas = "DELETE FROM reseña WHERE id_audifono = '$producto_id'";
        $this->_aplicarQuery($sql_delete_reseñas);

        // Eliminar el producto
        $sql_delete_producto = "DELETE FROM audifonos WHERE nombre = '$this->_nombre'";
        $this->_aplicarQuery($sql_delete_producto);

        return;
    }


    public function localizarProducto()
    {
        $sql = "SELECT id, nombre, descripcion, precio, foto FROM audifonos WHERE nombre = '$this->_nombre'";
        $res = $this->_aplicarQuery($sql);
        $valores = $res->fetch_assoc();
        return $valores;
    }
    public function modificarProducto()
    {
        if (!empty($this->_foto['foto']['name'])) {
            $nombreFoto = $this->_foto['foto']['name'];
            $rutaDirectorio = 'vista/catalogo/productos/';
            $rutaCompleta = $rutaDirectorio . $nombreFoto;

            move_uploaded_file($this->_foto['foto']['tmp_name'], $rutaCompleta);

            $sql = "UPDATE audifonos 
                    SET nombre = '$this->_nombre',
                        descripcion = '$this->_descripcion',
                        precio = '$this->_precio',
                        foto = '$rutaCompleta'
                    WHERE nombre = '$this->_nombre'";
        } else {
            $sql = "UPDATE audifonos 
                    SET nombre = '$this->_nombre',
                        descripcion = '$this->_descripcion',
                        precio = '$this->_precio'
                    WHERE nombre = '$this->_nombre'";
        }
        $this->_aplicarQuery($sql);
        return;
    }



    public function _aplicarQuery($consulta)
    {
        $objConexion = new Conexion();
        $res = $objConexion->ejecutarConsulta($consulta);
        $objConexion = $objConexion->cerrarConexion();
        return $res;
    }
}

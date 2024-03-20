<?php

require_once 'helper/clsConexion.php';

class Reseñas
{
    private $_id_audifono;
    private $_id_admin;
    private $_comentario;
    private $_calificacion;

    public function setDatos($id_audifono, $id_admin, $comentario, $calificacion)
    {
        $this->_id_audifono = $id_audifono;
        $this->_id_admin = $id_admin;
        $this->_comentario = $comentario;
        $this->_calificacion = $calificacion;
    }

    public function insertarReseña()
    {
        try {
            $sql = "INSERT INTO reseña(id_audifono, id_admin, comentario, calificacion) VALUES (
                '$this->_id_audifono',
                '$this->_id_admin',
                '$this->_comentario',
                '$this->_calificacion'
            )";
            $res = $this->_aplicarQuery($sql);
            return $res;
        } catch (Exception $e) {
            echo "Error en la consulta: " . $e->getMessage();
        }
    }

    public function traerReseñasPorAudifono($id_audifono)
    {
        try {
            $sql = "SELECT * FROM reseña WHERE id_audifono = '$id_audifono'";
            $resultados = $this->_aplicarQuery($sql);
            return $resultados;
        } catch (Exception $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }


    public function traerReseñas()
    {
        try {
            $sql = "SELECT * FROM reseña";
            $resultados = $this->_aplicarQuery($sql);
            return $resultados;
        } catch (Exception $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }

    public function eliminarReseña($id_reseña)
    {
        $sql = "DELETE FROM reseña WHERE id_reseña = '$id_reseña'";
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

<?php
require_once 'helper/clsConexion.php';
class Usuario
{
    private $_correo;
    private $_nombre;
    private $_contrasena;
    private $_foto;
    private $_perfil;
    private $_estatus;

    public function setDatos($corr, $nom, $cont, $foto)
    {
        $this->_correo = $corr;
        $this->_nombre = $nom;
        $this->_contrasena = $cont;
        $this->_foto = $foto;
        //oerfil 1 = Administrador y 2 = Cliente
        //estatus 0 = Inactiva y 1 = Activo

    }

    public function insertarUsuario()
    {
        $nombreFoto = $this->_foto['foto']['name'];
        $rutaDirectorio = 'vista/catalogo/clientes/';
        $rutaCompleta = $rutaDirectorio . $nombreFoto;
        move_uploaded_file($this->_foto['foto']['tmp_name'], $rutaCompleta);
        $sql = "INSERT INTO dbusuarios(correo, nombre, contrasena, foto, perfil, estatus) VALUES('$this->_correo','$this->_nombre',sha2('$this->_contrasena',256),'$rutaCompleta',2,1)";

        $res = $this->_aplicarQuery($sql);
        return $res;
    }

    public function login()
    {
        $this->_correo = htmlentities($this->_correo, ENT_QUOTES);
        $sql = "select id,nombre,foto,perfil from dbusuarios where correo ='$this->_correo' && contrasena = sha2('$this->_contrasena',256)";
        $res = $this->_aplicarQuery($sql);
        $valores = $res->fetch_assoc();
        return $valores;
    }

    private function _aplicarQuery($consulta)
    {
        $objConexion = new Conexion();
        $res = $objConexion->ejecutarConsulta($consulta);
        $objConexion = $objConexion->cerrarConexion();
        return $res;
    }
}

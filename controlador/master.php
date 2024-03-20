<?php
$peticion = 'inicio';
extract($_REQUEST);
require_once 'helper/clsSesion.php';
$objSesion = new Sesion();

if (!isset($_SESSION['usuario'])) {

    switch ($peticion) {
        case 'inicio':
            require_once 'vista\inicio.php';
            break;
        case 'somos':
            require_once 'vista\somos.php';
            break;
        case 'galeria':
            require_once 'modelo/ClsProducto.php';
            $objProducto = new Productos();
            $datos = $objProducto->traerAudifonos();
            require_once 'vista/galeria.php';
            break;
        case 'iniciarSesion':
            require_once 'vista/login.php';
            break;


        case 'registroUsuario':
            require_once 'vista\register.php';
            break;


        case 'login':
            require_once 'modelo/ClsUsuario.php';
            $objUsuario = new Usuario();
            $objUsuario->setDatos($correo, null, $contrasena, null);
            $datos = $objUsuario->login();

            if (isset($datos['perfil'])) {
                $objSesion->crearVariable('usuario', $datos);
                if ($datos['perfil'] == 1)
                    header('location:?peticion=perfilCliente');
                else
                    header('location:?peticion=perfilAdmin');
            }
            require_once 'vista/login.php';
            break;

        case 'registrarUsuario':
            require_once 'modelo/ClsUsuario.php';
            $objUsuario = new Usuario();
            $objUsuario->setDatos($correo, $nombre, $contrasena, $_FILES);
            $datos = $objUsuario->insertarUsuario();
            require_once 'vista/register.php';
            break;
    }
}
if (isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 2) {
    $id_admin = $_SESSION['usuario']['id'];
    switch ($peticion) {
        case 'perfilAdmin':
            require_once 'vista\adminVista\indexAdmin.php';
            break;

        case 'verReseñas':
            require_once 'modelo\ClsReseña.php';
            $objReseña = new Reseñas();
            $datos = $objReseña->traerReseñas();
            require_once 'vista\adminVista\verReseñas.php';
            break;

        case 'agregarReseña':
            require_once 'modelo/ClsProducto.php';
            $objProducto = new Productos();
            $datos = $objProducto->traerAudifonos();
            require_once 'vista\adminVista\reseñas.php';
            break;

        case 'guardarReseña':
            require_once 'modelo\ClsReseña.php';
            $id_audifono = isset($_POST['id_audifono']) ? $_POST['id_audifono'] : '';
            $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : '';
            $calificacion = isset($_POST['calificacion']) ? $_POST['calificacion'] : '';
            $objReseña = new Reseñas();
            $objReseña->setDatos($id_audifono, $id_admin, $comentario, $calificacion);
            $datos = $objReseña->insertarReseña();
            require_once 'vista\adminVista\reseñas.php';
            break;
        case 'verProductos':
            require_once 'modelo/ClsProducto.php';
            $objProducto = new Productos();
            $datos = $objProducto->traerAudifonos();
            require_once 'vista/adminVista/productos.php';
            break;

        case 'agregarProducto':
            require_once 'vista\adminVista\producto.php';
            break;

        case 'cancelarProducto':
            require_once 'modelo/ClsProducto.php';
            $objProducto = new Productos();
            $objProducto->setDatos($nombre, null, null, null);
            $objProducto->cancelarProducto();
            $datos = $objProducto->traerAudifonos();
            require_once 'vista\adminVista\productos.php';
            break;
        case 'modificarProducto':
            require_once 'vista\adminVista\editarProducto.php';
            break;
        case 'guardarModificacionProducto':
            require_once 'modelo/ClsProducto.php';
            $objProducto = new Productos();
            $objProducto->setDatos($nombre, $descripcion, $precio, $_FILES);
            $objProducto->modificarProducto();
            header('location:?peticion=verProductos');
            break;

        case 'logout':
            $objSesion->borrarVariable('usuario');
            require_once 'vista/login.php';
            break;
        case 'guardarProducto';
            require_once 'modelo/ClsProducto.php';
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
            $precio = isset($_POST['precio']) ? $_POST['precio'] : '';

            $objProducto = new Productos();
            $objProducto->setDatos($nombre, $descripcion, $precio, $_FILES);
            $datos = $objProducto->insertarProducto();
            require_once 'vista\adminVista\producto.php';
            break;

        default:
            header('location:?peticion=perfilAdmin');
            break;
    }
}

if (isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 1) {
    switch ($peticion) {
        case 'perfilCliente':
            require_once 'vista\clienteVista\indexCliente.php';
            break;
        case 'somos':
            require_once 'vista\clienteVista\somosCliente.php';
            break;
        case 'galeria':
            require_once 'modelo/ClsProducto.php';
            $objProducto = new Productos();
            $datos = $objProducto->traerAudifonos();
            require_once 'vista\clienteVista\galeriaCliente.php';
            break;
        case 'verMas':
            require_once 'modelo/ClsReseña.php';
            require_once 'vista\clienteVista\verMas.php';
            break;

        case 'logout':
            $objSesion->borrarVariable('usuario');
            require_once 'vista/login.php';
            break;
        default:
            header('location:?peticion=perfilCliente');
            break;
    }
}

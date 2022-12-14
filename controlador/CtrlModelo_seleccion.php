<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

require_once MOD . DIRECTORY_SEPARATOR . 'Modelo_seleccion.php';

/*
* Clase CtrlModelo_seleccion
*/
class CtrlModelo_seleccion extends Controlador {
    
    public function index(){
        # Mostramos los datos
        $modelo_seleccion = new Modelo_seleccion();
        $datosModelo_seleccion = $modelo_seleccion->leer();
        /* $datos = array(
                'titulo'=>'Modelo_seleccion',
                'encabezado'=>'Listado de Modelo_seleccion',
                'datos'=>$datosModelo_seleccion,
            );
        $this->mostrarVista('modelo_seleccion/mostrar.php',$datos);
        */
        $menu = array(
            'CtrlBoletas' => 'Boletas',
            'CtrlClientes' => 'Clientes',
            'CtrlDetalle_boleta' => 'Detalle_boleta',
            'CtrlVendedor' => 'Vendedor',
            'CtrlTalla' => 'Talla',
            'CtrlModelo_talla' => 'Modelo_talla',
            'CtrlCalidad' => 'Calidad',
            'CtrlModelo_calidad' => 'Modelo_calidad',
            'CtrlSeleccion' => 'Seleccion',
            'CtrlModelo_Seleccion' => 'Modelo_seleccion',
            'CtrlImagen' => 'Imagen',
            'CtrlModelos' => 'Modelos',
            'CtrlMarca' => 'Marca',
            'CtrlCamisetas' => 'Camisetas',
            'CtrlDetalles_camisetas' => 'Detalles_camisetas',
            );
    
        $datos1 = array(
                'datos'=>$datosModelo_seleccion,
            );
    
        $datos = array(
            'titulo'=>'Listado de Modelo_seleccion',
            'contenido'=>Vista::mostrar('modelo_seleccion/mostrar.php',$datos1,true),
            'menu'=>$menu
        );
        
        $this->mostrarVista('template.php',$datos);



    }
    public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $modelo_seleccion = new Modelo_seleccion($_REQUEST['id']);
            $modelo_seleccion->eliminar();
            $this->index();
        } else {
            echo "...El Id a ELIMINAR es requerido";
        }
    }
    public function guardarNuevo(){
        $modelo_seleccion = new Modelo_seleccion (
                $_POST["id"],
                $_POST["idseleccion"],
                $_POST["descripcion"],
                $_POST["color"],
 
                );
        $modelo_seleccion->nuevo();

        $this->index();
    }
    public function guardarEditar(){
        $modelo_seleccion = new Modelo_seleccion (
                $_POST["id"],    #El id que enviamos
                $_POST["idseleccion"],
                $_POST["descripcion"],
                $_POST["color"],

                );
        $modelo_seleccion->editar();

        $this->index();
    }
    public function nuevo(){
        #Mostramos el Formulario de Nuevo
        $datos=array(
            'encabezado'=>'Nuevo Modelo_seleccion'
            );
         $this->mostrarVista('modelo_seleccion/frmNuevo.php',$datos);
    }
    public function editar(){
        #Mostramos el Formulario de Editar
        if (isset($_REQUEST['id'])) {
            $modelo_seleccion = new Modelo_seleccion($_REQUEST['id']);
            $modelo_seleccion->leer(false);
            $datos = array(
                'encabezado'=>'Editando Modelo_seleccion: '. $_REQUEST['id'],
                'modelo_seleccion'=>$modelo_seleccion, 
               );
            $this->mostrarVista('modelo_seleccion/frmEditar.php',$datos);
        } else {
            echo "...El Id a Editar es requerido";
        }
        
    }
}
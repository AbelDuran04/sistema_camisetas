<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

require_once MOD . DIRECTORY_SEPARATOR . 'Modelo_calidad.php';

/*
* Clase CtrlModelo_calidad
*/
class CtrlModelo_calidad extends Controlador {
    
    public function index(){
        # Mostramos los datos
        $modelo_calidad = new Modelo_calidad();
        $datosModelo_calidad = $modelo_calidad->leer();
        /* $datos = array(
                'titulo'=>'Modelo_calidad',
                'encabezado'=>'Listado de Modelo_calidad',
                'datos'=>$datosModelo_calidad,
            );
        $this->mostrarVista('modelo_calidad/mostrar.php',$datos);
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
                'datos'=>$datosModelo_calidad,
            );
    
        $datos = array(
            'titulo'=>'Listado de Modelo_calidad',
            'contenido'=>Vista::mostrar('modelo_calidad/mostrar.php',$datos1,true),
            'menu'=>$menu
        );
        
        $this->mostrarVista('template.php',$datos);


    }
    public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $modelo_calidad = new Modelo_calidad($_REQUEST['id']);
            $modelo_calidad->eliminar();
            $this->index();
        } else {
            echo "...El Id a ELIMINAR es requerido";
        }
    }
    public function guardarNuevo(){
        $modelo_calidad = new Modelo_calidad (
                $_POST["id"],
                $_POST["idcalidad"],
 
                );
        $modelo_calidad->nuevo();

        $this->index();
    }
    public function guardarEditar(){
        $modelo_calidad = new Modelo_calidad (
                $_POST["id"],    #El id que enviamos
                $_POST["idcalidad"],

                );
        $modelo_calidad->editar();

        $this->index();
    }
    public function nuevo(){
        #Mostramos el Formulario de Nuevo
        $datos=array(
            'encabezado'=>'Nuevo Modelo_calidad'
            );
         $this->mostrarVista('modelo_calidad/frmNuevo.php',$datos);
    }
    public function editar(){
        #Mostramos el Formulario de Editar
        if (isset($_REQUEST['id'])) {
            $modelo_calidad = new Modelo_calidad($_REQUEST['id']);
            $modelo_calidad->leer(false);
            $datos = array(
                'encabezado'=>'Editando Modelo_calidad: '. $_REQUEST['id'],
                'modelo_calidad'=>$modelo_calidad, 
               );
            $this->mostrarVista('modelo_calidad/frmEditar.php',$datos);
        } else {
            echo "...El Id a Editar es requerido";
        }
        
    }
}
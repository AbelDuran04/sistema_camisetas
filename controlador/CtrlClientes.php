<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

require_once MOD . DIRECTORY_SEPARATOR . 'Clientes.php';

/*
* Clase CtrlClientes
*/
class CtrlClientes extends Controlador {
    
    public function index(){
        # Mostramos los datos
        $clientes = new Clientes();
        $datosClientes = $clientes->leer();
        /* $datos = array(
                'titulo'=>'Clientes',
                'encabezado'=>'Listado de Clientes',
                'datos'=>$datosClientes,
            );
        $this->mostrarVista('clientes/mostrar.php',$datos);
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
                'datos'=>$datosClientes,
            );
    
        $datos = array(
            'titulo'=>'Listado de Clientes',
            'contenido'=>Vista::mostrar('clientes/mostrar.php',$datos1,true),
            'menu'=>$menu
        );
        
        $this->mostrarVista('template.php',$datos);

        

    }
    public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $clientes = new Clientes($_REQUEST['id']);
            $clientes->eliminar();
            $this->index();
        } else {
            echo "...El Id a ELIMINAR es requerido";
        }
    }
    public function guardarNuevo(){
        $clientes = new Clientes (
                $_POST["id"],
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["dni"],
                $_POST["direccion"],
                $_POST["telefono"],
                $_POST["nacionalidad"],
                );
        $clientes->nuevo();

        $this->index();
    }
    public function guardarEditar(){
        $clientes = new Clientes (
                $_POST["id"],    #El id que enviamos
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["dni"],
                $_POST["direccion"],
                $_POST["telefono"],
                $_POST["nacionalidad"],
                );
        $clientes->editar();

        $this->index();
    }
    public function nuevo(){
        #Mostramos el Formulario de Nuevo
        $datos=array(
            'encabezado'=>'Nuevo Clientes'
            );
         $this->mostrarVista('clientes/frmNuevo.php',$datos);
    }
    public function editar(){
        #Mostramos el Formulario de Editar
        if (isset($_REQUEST['id'])) {
            $clientes = new Clientes($_REQUEST['id']);
            $clientes->leer(false);
            $datos = array(
                'encabezado'=>'Editando Clientes: '. $_REQUEST['id'],
                'clientes'=>$clientes, 
               );
            $this->mostrarVista('clientes/frmEditar.php',$datos);
        } else {
            echo "...El Id a Editar es requerido";
        }
        
    }
}
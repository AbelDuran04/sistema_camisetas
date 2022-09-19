<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

require_once MOD . DIRECTORY_SEPARATOR . 'Vendedor.php';

/*
* Clase CtrlVendedor
*/
class CtrlVendedor extends Controlador {
    
    public function index(){
        # Mostramos los datos
        $vendedor = new Vendedor();
        $datosVendedor = $vendedor->leer();
        /* $datos = array(
                'titulo'=>'Vendedor',
                'encabezado'=>'Listado de Vendedor',
                'datos'=>$datosVendedor,
            );
        $this->mostrarVista('vendedor/mostrar.php',$datos);
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
                'datos'=>$datosVendedor,
            );
    
        $datos = array(
            'titulo'=>'Listado de Vendedor',
            'contenido'=>Vista::mostrar('vendedor/mostrar.php',$datos1,true),
            'menu'=>$menu
        );
        
        $this->mostrarVista('template.php',$datos);



    }
    public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $vendedor = new Vendedor($_REQUEST['id']);
            $vendedor->eliminar();
            $this->index();
        } else {
            echo "...El Id a ELIMINAR es requerido";
        }
    }
    public function guardarNuevo(){
        $vendedor = new Vendedor (
                $_POST["id"],
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["dni"],
                $_POST["direccion"],
                $_POST["telefono"],
                );
        $vendedor->nuevo();

        $this->index();
    }
    public function guardarEditar(){
        $vendedor = new Vendedor (
                $_POST["id"],    #El id que enviamos
                $_POST["nombres"],
                $_POST["apellidos"],
                $_POST["dni"],
                $_POST["direccion"],
                $_POST["telefono"],
                );
        $vendedor->editar();

        $this->index();
    }
    public function nuevo(){
        #Mostramos el Formulario de Nuevo
        $datos=array(
            'encabezado'=>'Nuevo Vendedor'
            );
         $this->mostrarVista('vendedor/frmNuevo.php',$datos);
    }
    public function editar(){
        #Mostramos el Formulario de Editar
        if (isset($_REQUEST['id'])) {
            $vendedor = new Vendedor($_REQUEST['id']);
            $vendedor->leer(false);
            $datos = array(
                'encabezado'=>'Editando Vendedor: '. $_REQUEST['id'],
                'vendedor'=>$vendedor, 
               );
            $this->mostrarVista('vendedor/frmEditar.php',$datos);
        } else {
            echo "...El Id a Editar es requerido";
        }
        
    }
}
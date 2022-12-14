<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

require_once MOD . DIRECTORY_SEPARATOR . 'Boletas.php';

/*
* Clase CtrlBoletas
*/
class CtrlBoletas extends Controlador {
    
    public function index(){
        # Mostramos los datos
        $boletas = new Boletas();
        $datosBoletas = $boletas->leer();
       /* $datos = array(
                'titulo'=>'Boletas',
                'encabezado'=>'Listado de Boletas',
                'datos'=>$datosBoletas,
            );
        $this->mostrarVista('boletas/mostrar.php',$datos);
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
            'datos'=>$datosBoletas,
        );

    $datos = array(
        'titulo'=>'Listado de Boletas',
        'contenido'=>Vista::mostrar('boletas/mostrar.php',$datos1,true),
        'menu'=>$menu
    );
    
    $this->mostrarVista('template.php',$datos);





    }
    public function eliminar(){
        if (isset($_REQUEST['id'])) {
            $boletas = new Boletas($_REQUEST['id']);
            $boletas->eliminar();
            $this->index();
        } else {
            echo "...El Id a ELIMINAR es requerido";
        }
    }
    public function guardarNuevo(){
        $boletas = new Boletas (
                $_POST["id"],
                $_POST["fecha"],
                $_POST["total"],
                $_POST["idclientes"],
                $_POST["idvendedor"],
                );
        $boletas->nuevo();

        $this->index();
    }
    public function guardarEditar(){
        $boletas = new Boletas (
                $_POST["id"],    #El id que enviamos
                $_POST["fecha"],
                $_POST["total"],
                $_POST["idclientes"],
                $_POST["idvendedor"],
                );
        $boletas->editar();

        $this->index();
    }
    public function nuevo(){
        #Mostramos el Formulario de Nuevo
        $datos=array(
            'encabezado'=>'Nuevo Boletas'
            );
         $this->mostrarVista('boletas/frmNuevo.php',$datos);
    }
    public function editar(){
        #Mostramos el Formulario de Editar
        if (isset($_REQUEST['id'])) {
            $boletas = new Boletas($_REQUEST['id']);
            $boletas->leer(false);
            $datos = array(
                'encabezado'=>'Editando Boletas: '. $_REQUEST['id'],
                'boletas'=>$boletas, 
               );
            $this->mostrarVista('boletas/frmEditar.php',$datos);
        } else {
            echo "...El Id a Editar es requerido";
        }
        
    }
}
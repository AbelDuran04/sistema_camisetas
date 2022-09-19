<?php 
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php'; 
require_once MOD . DIRECTORY_SEPARATOR . 'Seleccion.php'; 
/* * Clase CtrlSeleccion */ 
class CtrlSeleccion extends Controlador { public function index(){ 
    # Mostramos los datos 
    $seleccion = new Seleccion(); 
    $datosSeleccion = $seleccion->leer(); 
    /* $datos = array( 
        'titulo'=>'Seleccion', 
        'encabezado'=>'Listado de Seleccion', 
        'datos'=>$datosSeleccion, 
    ); 
    $this->mostrarVista('seleccion/mostrar.php',$datos); 
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
            'datos'=>$datosSeleccion,
        );

    $datos = array(
        'titulo'=>'Listado de Seleccion',
        'contenido'=>Vista::mostrar('seleccion/mostrar.php',$datos1,true),
        'menu'=>$menu
    );
    
    $this->mostrarVista('template.php',$datos);



} 
public function eliminar(){ 
    if (isset($_REQUEST['id'])) {
        $seleccion = new Seleccion($_REQUEST['id']); 
        $seleccion->eliminar(); $this->index(); 
    }
    else 
    echo "...El Id a ELIMINAR es requerido"; 
} 
public function guardarNuevo(){ 
    $seleccion = new Seleccion ( 
        $_POST["id"], 
        $_POST["seleccion"], 
    ); 
    $seleccion->nuevo(); 
    $this->index(); 
} 
public function guardarEditar(){ 
    $seleccion = new Seleccion ( 
        $_POST["id"], #El id que enviamos 
        $_POST["seleccion"], 
    );
     $seleccion->editar();
     $this->index();
}
public function nuevo(){ 
    #Mostramos el Formulario de Nuevo 
    $datos=array( 
        'encabezado'=>'Nuevo Seleccion' 
    ); 
    $this->mostrarVista('seleccion/frmNuevo.php',$datos); 
} 
public function editar(){ 
    #Mostramos el Formulario de Editar 
    if (isset($_REQUEST['id'])) { 
        $seleccion = new Seleccion($_REQUEST['id']); 
        $seleccion->leer(false); 
        $datos = array( 
            'encabezado'=>'Editando Seleccion: '. $_REQUEST['id'], 
            'seleccion'=>$seleccion, 
        ); 
        $this->mostrarVista('seleccion/frmEditar.php',$datos); 
    } 
    else 
    echo "...El Id a EDITAR es requerido"; 
} 
}
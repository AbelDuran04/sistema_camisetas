<?php 
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php'; 
require_once MOD . DIRECTORY_SEPARATOR . 'Camisetas.php'; 
/* * Clase CtrlCamisetas */ 
class CtrlCamisetas extends Controlador { 
    public function index(){ 
    # Mostramos los datos 
    $camisetas = new Camisetas(); 
    $datosCamisetas = $camisetas->leer(); 
    /* $datos = array( 
        'titulo'=>'Camisetas', 
        'encabezado'=>'Listado de Camisetas', 
        'datos'=>$datosCamisetas, 
    ); 
    $this->mostrarVista('camisetas/mostrar.php',$datos); 
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
            'datos'=>$datosCamisetas,
        );

    $datos = array(
        'titulo'=>'Listado de Camisetas',
        'contenido'=>Vista::mostrar('camisetas/mostrar.php',$datos1,true),
        'menu'=>$menu
    );
    
    $this->mostrarVista('template.php',$datos);



} 
public function eliminar(){ 
    if (isset($_REQUEST['id'])) {
        $camisetas = new Camisetas($_REQUEST['id']); 
        $camisetas->eliminar(); $this->index(); 
    }
    else 
    echo "...El Id a ELIMINAR es requerido"; 
} 
public function guardarNuevo(){ 
    $camisetas = new Camisetas ( 
        $_POST["id"], 
        $_POST["descripcion"], 
    ); 
    $camisetas->nuevo(); 
    $this->index(); 
} 
public function guardarEditar(){ 
    $camisetas = new Camisetas ( 
        $_POST["id"], #El id que enviamos 
        $_POST["descripcion"], 
    );
     $camisetas->editar();
     $this->index();
}
public function nuevo(){ 
    #Mostramos el Formulario de Nuevo 
    $datos=array( 
        'encabezado'=>'Nuevo Camisetas' 
    ); 
    $this->mostrarVista('camisetas/frmNuevo.php',$datos); 
} 
public function editar(){ 
    #Mostramos el Formulario de Editar 
    if (isset($_REQUEST['id'])) { 
        $camisetas = new Camisetas($_REQUEST['id']); 
        $camisetas->leer(false); 
        $datos = array( 
            'encabezado'=>'Editando Camisetas: '. $_REQUEST['id'], 
            'camisetas'=>$camisetas, 
        ); 
        $this->mostrarVista('camisetas/frmEditar.php',$datos); 
    } 
    else 
    echo "...El Id a EDITAR es requerido"; 
} 
}
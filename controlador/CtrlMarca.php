<?php 
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php'; 
require_once MOD . DIRECTORY_SEPARATOR . 'Marca.php'; 
/* * Clase CtrlMarca */ 
class CtrlMarca extends Controlador { public function index(){ 
    # Mostramos los datos 
    $marca= new Marca(); 
    $datosMarca = $marca->leer(); 
    /* $datos = array( 
        'titulo'=>'Marca', 
        'encabezado'=>'Listado de Marca', 
        'datos'=>$datosMarca, 
    ); 
    $this->mostrarVista('marca/mostrar.php',$datos); 
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
            'datos'=>$datosMarca,
        );

    $datos = array(
        'titulo'=>'Listado de Marca',
        'contenido'=>Vista::mostrar('marca/mostrar.php',$datos1,true),
        'menu'=>$menu
    );
    
    $this->mostrarVista('template.php',$datos);


} 
public function eliminar(){ 
    if (isset($_REQUEST['id'])) {
        $marca = new Marca($_REQUEST['id']); 
        $marca->eliminar(); $this->index(); 
    }
    else 
    echo "...El Id a ELIMINAR es requerido"; 
} 
public function guardarNuevo(){ 
    $marca = new Marca ( 
        $_POST["id"], 
        $_POST["marca"], 
    ); 
    $marca->nuevo(); 
    $this->index(); 
} 
public function guardarEditar(){ 
    $marca = new Marca ( 
        $_POST["id"], #El id que enviamos 
        $_POST["marca"], 
    );
     $marca->editar();
     $this->index();
}
public function nuevo(){ 
    #Mostramos el Formulario de Nuevo 
    $datos=array( 
        'encabezado'=>'Nuevo Marca' 
    ); 
    $this->mostrarVista('marca/frmNuevo.php',$datos); 
} 
public function editar(){ 
    #Mostramos el Formulario de Editar 
    if (isset($_REQUEST['id'])) { 
        $marca = new Marca($_REQUEST['id']); 
        $marca->leer(false); 
        $datos = array( 
            'encabezado'=>'Editando Marca: '. $_REQUEST['id'], 
            'marca'=>$marca, 
        ); 
        $this->mostrarVista('marca/frmEditar.php',$datos); 
    } 
    else 
    echo "...El Id a EDITAR es requerido"; 
} 
}
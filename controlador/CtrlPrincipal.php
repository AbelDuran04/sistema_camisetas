<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

/*
* Clase CtrlPrincipal
*/
class CtrlPrincipal extends Controlador {
    
    public function index(){
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
        /*$datos = array(
                'encabezado'=> 'Sistema Administración Vacunas',
                'menu'=>$menu
            );
        */
        $datos = array(
            'titulo'=>'Sistema Venta de Camisetas de Selecciones',
            'contenido'=>Vista::mostrar('principal.php','',true),
            'menu'=>$menu
        );
        
        $this->mostrarVista('template.php',$datos);
    }
}
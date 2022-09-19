    <a href="?ctrl=CtrlModelo_calidad&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Modelo_calidad</a>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>idcalidad</th>
  
            <th>Operaciones</th>
        </tr>
    <?php 
    if (is_array($datos))
        foreach ($datos as $c) { ?>
            <tr>
                <td><?=$c["idmodelo_calidad"]?></td>
                <td><?=$c["idcalidad"]?></td>
    

                <td>
                <a href="?ctrl=CtrlModelo_calidad&accion=editar&id=<?=$c["idmodelo_calidad"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                / 
                <a href="?ctrl=CtrlModelo_calidad&accion=eliminar&id=<?=$c["idmodelo_calidad"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
                </td>
            </tr>
        <?php }    ?>
    </table>
    <br><a href="?" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>

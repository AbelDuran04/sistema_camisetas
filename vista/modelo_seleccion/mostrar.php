    <a href="?ctrl=CtrlModelo_seleccion&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Modelo_seleccion</a>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>idseleccion</th>
            <th>Descripcion</th>
            <th>Color</th>
            <th>Operaciones</th>
        </tr>
    <?php 
    if (is_array($datos))
        foreach ($datos as $c) { ?>
            <tr>
                <td><?=$c["idmodelo_seleccion"]?></td>
                <td><?=$c["idseleccion"]?></td>
                <td><?=$c["descripcion"]?></td>
                <td><?=$c["color"]?></td>
    

                <td>
                <a href="?ctrl=CtrlModelo_seleccion&accion=editar&id=<?=$c["idmodelo_seleccion"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                / 
                <a href="?ctrl=CtrlModelo_seleccion&accion=eliminar&id=<?=$c["idmodelo_seleccion"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
                </td>
            </tr>
        <?php }    ?>
    </table>
    <br><a href="?" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>

    <a href="?ctrl=CtrlImagen&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nueva Imagen</a>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>id modelo seleccion</th>
            <th>Descripcion</th>
            <th>Url</th>
            <th>Operaciones</th>
        </tr>
    <?php 
    if (is_array($datos))
        foreach ($datos as $c) { ?>
            <tr>
                <td><?=$c["idimagen"]?></td>
                <td><?=$c["idmodelo_seleccion"]?></td>
                <td><?=$c["descripcion"]?></td>
                <td><?=$c["url"]?></td>
    

                <td>
                <a href="?ctrl=CtrlImagen&accion=editar&id=<?=$c["idimagen"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                / 
                <a href="?ctrl=CtrlImagen&accion=eliminar&id=<?=$c["idimagen"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
                </td>
            </tr>
        <?php }    ?>
    </table>
    <br><a href="?" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>

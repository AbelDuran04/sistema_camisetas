    <a href="?ctrl=CtrlModelo_talla&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Modelo_talla</a>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>idtalla</th>
  
            <th>Operaciones</th>
        </tr>
    <?php 
    if (is_array($datos))
        foreach ($datos as $c) { ?>
            <tr>
                <td><?=$c["idmodelo_talla"]?></td>
                <td><?=$c["idtalla"]?></td>
    

                <td>
                <a href="?ctrl=CtrlModelo_talla&accion=editar&id=<?=$c["idmodelo_talla"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                / 
                <a href="?ctrl=CtrlModelo_talla&accion=eliminar&id=<?=$c["idmodelo_talla"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
                </td>
            </tr>
        <?php }    ?>
    </table>
    <br><a href="?" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>

    <a href="?ctrl=CtrlModelos&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevos Modelos</a>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>id Marca</th>
            <th>Modelo</th>
            <th>Operaciones</th>
        </tr>
    <?php 
    if (is_array($datos))
        foreach ($datos as $c) { ?>
            <tr>
                <td><?=$c["idmodelos"]?></td>
                <td><?=$c["idmarca"]?></td>
                <td><?=$c["modelo"]?></td>
    

                <td>
                <a href="?ctrl=CtrlModelos&accion=editar&id=<?=$c["idmodelos"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                / 
                <a href="?ctrl=CtrlModelos&accion=eliminar&id=<?=$c["idmodelos"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
                </td>
            </tr>
        <?php }    ?>
    </table>
    <br><a href="?" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>

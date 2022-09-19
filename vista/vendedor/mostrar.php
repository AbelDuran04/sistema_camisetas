    <a href="?ctrl=CtrlVendedor&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Vendedor</a>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dni</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Operaciones</th>
        </tr>
    <?php 
    //var_dump($datos);exit();
    if (is_array($datos))
        foreach ($datos as $c) { ?>
            <tr>
                <td><?=$c["idvendedor"]?></td>
                <td><?=$c["nombres"]?></td>
                <td><?=$c["apellidos"]?></td>
                <td><?=$c["dni"]?></td>
                <td><?=$c["telefono"]?></td>
                <td><?=$c["direccion"]?></td>
                <td>
                <a href="?ctrl=CtrlVendedor&accion=editar&id=<?=$c["idvendedor"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                / 
                <a href="?ctrl=CtrlVendedor&accion=eliminar&id=<?=$c["idvendedor"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
                </td>
            </tr>
        <?php }    ?>
    </table>
    <br><a href="?" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>

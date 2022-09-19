 <a href="?ctrl=CtrlBoletas&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Boletas</a>
    <br><br>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Id Clientes</th>
            <th>Id Vendedor</th>
            <th>Operaciones</th>
        </tr>
    <?php 
    //var_dump($datos);exit();
    if (is_array($datos))
        foreach ($datos as $c) { ?>
            <tr>
                <td><?=$c["idboletas"]?></td>
                <td><?=$c["fecha"]?></td>
                <td><?=$c["total"]?></td>
                <td><?=$c["idclientes"]?></td>
                <td><?=$c["idvendedor"]?></td>
                <td>
                <a href="?ctrl=CtrlBoletas&accion=editar&id=<?=$c["idboletas"]?>">
                    <i class="bi bi-pencil-square"></i> Editar </a>
                / 
                <a href="?ctrl=CtrlBoletas&accion=eliminar&id=<?=$c["idboletas"]?>">
                    <i class="bi bi-trash"></i> Eliminar </a>
                </td>
            </tr>
        <?php }    ?>
    </table>
    <br><a href="?" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>

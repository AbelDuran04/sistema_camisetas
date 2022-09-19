    <a href="?ctrl=CtrlSeleccion&accion=nuevo" class="btn btn-primary"> 
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Seleccion
    </a> 
    <br><br> 
    <table class="table table-striped"> 
        <tr> 
            <th>Id</th> 
            <th>Seleccion</th> 
            <th>Operaciones</th> 
        </tr> 
        <?php 
        if (is_array($datos)) 
        foreach ($datos as $c) { ?> 
        <tr> 
            <td><?=$c["idseleccion"]?></td> 
            <td><?=$c["seleccion"]?></td> 
            <td> <a href="?ctrl=CtrlSeleccion&accion=editar&id=<?=$c["idseleccion"]?>"> 
                <i class="bi bi-pencil-square"></i> Editar </a> 
                / 
                <a href="?ctrl=CtrlSeleccion&accion=eliminar&id=<?=$c["idseleccion"]?>"> 
                <i class="bi bi-trash"></i> Eliminar </a> 
            </td> 
        </tr> <?php } ?> 
    </table> <br><a href="?" class="btn btn-primary"> 
        <i class="bi bi-arrow-90deg-left"></i> 
        Retornar</a> 

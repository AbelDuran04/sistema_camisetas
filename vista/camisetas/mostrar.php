 <a href="?ctrl=CtrlCamisetas&accion=nuevo" class="btn btn-primary"> 
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Camisetas
    </a> 
    <br><br> 
    <table class="table table-striped"> 
        <tr> 
            <th>Idcamisetas</th> 
            <th>Descripcion</th> 
            <th>Operaciones</th> 
        </tr> 
        <?php 
        if (is_array($datos)) 
        foreach ($datos as $c) { ?> 
        <tr> 
            <td><?=$c["idcamisetas"]?></td> 
            <td><?=$c["descripcion"]?></td> 
            <td> <a href="?ctrl=CtrlCamisetas&accion=editar&id=<?=$c["idcamisetas"]?>"> 
                <i class="bi bi-pencil-square"></i> Editar </a> 
                / 
                <a href="?ctrl=CtrlCamisetas&accion=eliminar&id=<?=$c["idcamisetas"]?>"> 
                <i class="bi bi-trash"></i> Eliminar </a> 
            </td> 
        </tr> <?php } ?> 
    </table> <br><a href="?" class="btn btn-primary"> 
        <i class="bi bi-arrow-90deg-left"></i> 
        Retornar</a> 

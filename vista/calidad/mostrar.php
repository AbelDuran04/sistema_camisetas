    <a href="?ctrl=CtrlCalidad&accion=nuevo" class="btn btn-primary"> 
        <i class="bi bi-plus-circle"></i> 
        Insertar Nuevo Calidad
    </a> 
    <br><br> 
    <table class="table table-striped"> 
        <tr> 
            <th>Id</th> 
            <th>Calidad</th> 
            <th>Operaciones</th> 
        </tr> 
        <?php 
        if (is_array($datos)) 
        foreach ($datos as $c) { ?> 
        <tr> 
            <td><?=$c["idcalidad"]?></td> 
            <td><?=$c["calidad"]?></td> 
            <td> <a href="?ctrl=CtrlCalidad&accion=editar&id=<?=$c["idcalidad"]?>"> 
                <i class="bi bi-pencil-square"></i> Editar </a> 
                / 
                <a href="?ctrl=CtrlCalidad&accion=eliminar&id=<?=$c["idcalidad"]?>"> 
                <i class="bi bi-trash"></i> Eliminar </a> 
            </td> 
        </tr> <?php } ?> 
    </table> <br><a href="?" class="btn btn-primary"> 
        <i class="bi bi-arrow-90deg-left"></i> 
        Retornar</a> 

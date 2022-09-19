    <a href="?ctrl=CtrlTalla&accion=nuevo" class="btn btn-primary"> 
        <i class="bi bi-plus-circle"></i> 
        Insertar Nueva Talla
    </a> 
    <br><br> 
    <table class="table table-striped"> 
        <tr> 
            <th>Id</th> 
            <th>Talla</th> 
            <th>Operaciones</th> 
        </tr> 
        <?php 
        if (is_array($datos)) 
        foreach ($datos as $c) { ?> 
        <tr> 
            <td><?=$c["idtalla"]?></td> 
            <td><?=$c["talla"]?></td> 
            <td> <a href="?ctrl=CtrlTalla&accion=editar&id=<?=$c["idtalla"]?>"> 
                <i class="bi bi-pencil-square"></i> Editar </a> 
                / 
                <a href="?ctrl=CtrlTalla&accion=eliminar&id=<?=$c["idtalla"]?>"> 
                <i class="bi bi-trash"></i> Eliminar </a> 
            </td> 
        </tr> <?php } ?> 
    </table> <br><a href="?" class="btn btn-primary"> 
        <i class="bi bi-arrow-90deg-left"></i> 
        Retornar</a> 

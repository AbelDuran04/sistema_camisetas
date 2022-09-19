<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Modelo Seleccion</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css" >
    <link rel="stylesheet" href="recursos/icons/bootstrap-icons.css">   
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=CtrlModelo_seleccion&accion=guardarNuevo" method="post">
        <div class="row mb-3">
        <div class="col-md-6">
            <label for="inputID" class="form-label">Id:</label>
            <input type="text" class="form-control"
                name="id" value="" id="inputID">
        </div>
        <div class="col-md-6">
            <label for="inputModelo_seleccion" class="form-label">Id seleccion:</label>
            <input type="text" class="form-control"
                name="idseleccion" value="" id="inputModelo_seleccion">
        </div>
        <div class="col-md-6">
            <label for="inputModelo_seleccion" class="form-label">Descripcion:</label>
            <input type="text" class="form-control"
                name="descripcion" value="" id="inputModelo_seleccion">
        </div>
        <div class="col-md-6">
            <label for="inputModelo_seleccion" class="form-label">Color:</label>
            <input type="text" class="form-control"
                name="color" value="" id="inputModelo_seleccion">
        </div>
        
        </div>
        <div class="col-md-3">
        <button type="submit" class="form-control btn btn-primary">
            <i class="bi bi-save2"></i> Guardar</button>
        </div>
    </form>
    <br><a href="?ctrl=CtrlModelo_seleccion" class="btn btn-primary">
        <i class="bi bi-arrow-90deg-left"></i>
        Retornar</a>
</body>
</html>
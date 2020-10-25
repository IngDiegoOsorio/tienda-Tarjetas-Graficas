<!DOCTYPE html>
<?php

include './Metodos.php';

$id=$_REQUEST['id'];

$objMetodo=new Metodos();
$lista=$objMetodo->ListarProductosPorId($id);

foreach ($lista as $row){
    $nombre=$row[1];
    $codigo=$row[2];
    $precio=$row[4];
    $descripcion=$row[3];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="formulario" method="post">
            <table border="0">
                <tr>
                    <th rowspan="4"><img src="./img/<?php echo $nombre; ?>.jpg" width="150" height="200"></th>
                    
                    <th><h2><?php echo $nombre; ?></h2></th>
                </tr>
                <tr>
                    <td align="justify"><?php echo $descripcion; ?></td>
                </tr>
                <tr>
                    <td align="justify"><h2>$<?php echo $precio; ?></h2></td>
                </tr>
                <tr>
                    <th align="left">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success">Agregar a Carrito</button>
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>

<!DOCTYPE html>
<?php
include './Metodos.php';
$objMetodo=new Metodos();
$lista=$objMetodo->ListarProductos();

?>

<html>
    <head>
                <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="Scripts.js"></script>
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="Principal.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="Catalogo.php"">Productos</a>
                  <a class="nav-item nav-link" href="Contacto.php">Contacto</a>
                  <a class="nav-item nav-link" href="Carrito.php">Carrito</a>
                </div>
            </div>
        </nav>
        <br>
        <div class="container">
        <div align="center"> <img src="" id="imagen"></div>
        <br>
         <table border="0" width="700" align="center" class="table">
            <tr align="center">
            <?php
            
            for($i = 0; $i < 3; $i++){
                $reg=$lista[rand(0,8)]
                ?>
                <th><img src="./img/<?php echo $reg[6];?>" 
                         width="260" height="120">
                    <br>
                    <div> <button type="button" class="btn btn-link text-decoration-none" 
                                  onclick="enviar(<?php echo $reg[0];?>)"
                                  data-toggle="modal" data-target="#exampleModal">
                            Tarjeta De Video <?php echo $reg[1];?></button></div>
                    <div>Codigo: <?php echo $reg[2];?></div>
                    <div>$<?php echo $reg[4];?></div>
                    <br>
            <button type="button" class="btn btn-success">Agregar</button>
                </th>
            <?php
                
            }
            ?>
            
        </table>
        <div class="card-footer text-muted text-center">
            Todos los rerechos reservados 2020 | Terminos y condiciones | Politica de privacidad | Redes sociales
        </div>
        </div>
        
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" "text-center" id="exampleModalLabel">Detalles del Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body" id="mostrar">
        ...
      </div>
    </div>
  </div>
</div>
        
        <script>
            let resultado = document.getElementById("mostrar")
            function enviar(id){
                
                let xmlhttp;
                if(window.XMLHttpRequest){
                    xmlhttp= new XMLHttpRequest();
                }else{
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                xmlhttp.onreadystatechange=function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        resultado.innerHTML=xmlhttp.responseText;
                    }
                }
                
                xmlhttp.open("GET","Detalles.php?id="+id,true);
                xmlhttp.send();
            }
        </script>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
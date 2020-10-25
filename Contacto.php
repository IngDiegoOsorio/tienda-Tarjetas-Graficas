<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
                        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="Scripts.js"></script>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="materialize.min.js"></script>
        <title></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                     <a class="nav-item nav-link" href="Principal.php">Home <span class="sr-only">(current)</span></a>
                     <a class="nav-item nav-link" href="Catalogo.php"">Productos</a>
                     <a class="nav-item nav-link active" href="Contacto.php">Contacto</a>
                     <a class="nav-item nav-link" href="Carrito.php">Carrito</a>
                </div>
            </div>
        </nav>
              
        
        <div class="container">
            <div class="container-fluid">
                <h1><span class="badge badge-dark">CONTACTO</span></h1>
                
                <form action="" class="formulario">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre(s)</label>
                        <input class="form-control" type="text" placeholder="Juan" id="nombre" name="nombre">
                        <label for="exampleFormControlInput1">Apellido(s)</label>
                        <input class="form-control" type="text" placeholder="Ramirez" id="apellido" name="apellido">
                        <label for="exampleFormControlInput1">Correo Electronico</label>
                        <input type="email" class="form-control"  placeholder="name@example.com" id="email"  name="email">
                        <label for="exampleFormControlTextarea1">Mensaje</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="mensaje" name="mensaje"></textarea>
                        <br>
                        <input type="submit" class="btn btn-secondary btn-lg btn-block" onclick="enviarFormulario()" value="Enviar">
                    </div>
                    <p class="green-text" id="enviado"></p>
                    
                </form>
            </div>
            
            <div class="card-footer text-muted text-center">
            Todos los rerechos reservados 2020 | Terminos y condiciones | Politica de privacidad | Redes sociales
            </div>
        </div>
        <?php
        // put your code here
        ?>
        
        <script src="jquery-3.1.1.min.js"></script>
<script src="materialize.min.js"></script>
<script>
    function enviarFormulario(){
       /* let nombre = document.getElementById('nombre').value;
        let apellido = document.getElementById('apellido').value;
        let email = document.getElementById('email').value;
        let mensaje = document.getElementById('mensaje').value;

        let dataInput = 'nombre' +nombre +'&apellido'+apellido
                        +'&email'+email + 'mensaje'+mensaje;
        
        $.ajax({
            type:'POST',
            url: 'EnviarCorreo.php',
            data: dataInput,
            success: function(resp){
                $("#enviado").html(resp);
            }
        });
        return false;
        */
         var formData = new FormData($(".formulario")[0]);
            $.ajax({
            data: formData,
            url: 'EnviarCorreo.php',
            type: 'post',
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function(response){
                if(response){
                    $('#enviado').text(response);
                    $('#nombre').val('');
                    $('#apellido').val('');
                    $('#email').val('');
                    $('#mensaje').val('');
                }else{
                   $('#enviado').text(response); 
                }
            }
        });

        alert("Correo enviado exitosamente.")
    }
</script>
       
    </body>
</html>

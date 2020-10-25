
function ingresar() {
    location.href = "./Tienda.php?op=1";
}

var imagenes = new Array(
        ['img/banner1.jpg'],
        ['img/banner2.jpg'],
        ['img/banner3.jpg'],
        ['img/banner4.jpg']
        );
var contador = 0;

/**
 * Funcion para cambiar la imagen y link
 */
function rotarImagenes()
{
    // cambiamos la imagen y la url
    contador++
    document.getElementById("imagen").src = imagenes[contador % imagenes.length][0];
}

/**
 * Función que se ejecuta una vez cargada la página
 */
onload = function ()
{
    // Cargamos una imagen aleatoria
    rotarImagenes();

    // Indicamos que cada 5 segundos cambie la imagen
    setInterval(rotarImagenes, 5000);
}


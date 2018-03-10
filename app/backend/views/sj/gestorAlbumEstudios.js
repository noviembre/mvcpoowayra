/*=============================================
Área de arrastre de imágenes
=============================================*/
/*=============================================
Agregar Foto
=============================================*/
$("#estudiosbtnAgregarFoto").click(function(){

    $("#estudiosbtnAgregarFoto").hide(400);//ocultar el div de fotos
    $("#estudiosbtnVolver").toggle(400);// muestra el boton
    $("#ordenarTextSlide").toggle(400);// muestra el boton
    $("#estudiosContenedorZ").toggle(400);// muestra el div paara arrastrar fotos


})

if($("#estudiosContenedorAgregar").html() == 0){
    $("#estudiosContenedorAgregar").css({"height":"150px"});
} else{
    $("#estudiosContenedorAgregar").css({"height":"auto"});

}

/*=====  Área de arrastre de imágenes  ======*/

/*=============================================
Subir Imagen
=============================================*/
// 1. Creando la accion de arrastrar imagen
$("#estudiosContenedorAgregar").on("dragover", function(e){

    e.preventDefault();
    e.stopPropagation();
    // 2.Cuando arrastre una img su fondo cambiara por un patron
    $("#estudiosContenedorAgregar").css({"background":"url(views/images/pattern.jpg)"})

})

/*=====  Área de arrastre de imágenes  ======*/

/*=============================================
SOLTAR Imagen
=============================================*/

// 3. Creando la accion de SOLTAR imagen
$("#estudiosContenedorAgregar").on("drop", function(e){

    e.preventDefault();
    e.stopPropagation();
    // 4.Cuando SUELTE una img su fondo cambiara por un patron BLANCO
    $("#estudiosContenedorAgregar").css({"background":"white"})
    //5. con esta propiedad vamos a pedir que la img que estamos
    //arrastrando nos muestre propiedades
    var archivo = e.originalEvent.dataTransfer.files;
    console.log('archivo', archivo);

    var imagen = archivo[0];


    // Validar tipo de la imagen
// Validar tamaño de la imagen
    var imagenSize = imagen.size;
    imagenType = imagen.type;
    //8. si imagen es = a jpeg o imagen es = png
    if(imagenType == "image/jpeg" || imagenType == "image/png"){
        $(".alerta").remove();
    } else{
        //9 caso contrario... mostrar una alerta
        $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">El archivo debe ser formato JPG o PNG</div>')

    }

    /*=============================================
	//Subir imagen al servidor
	=============================================*/
    // 10. si el peso y eltipo de img es igual a jpeg y png
    if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png") {
        var datos = new FormData();

        datos.append("imagen", imagen);

        $.ajax({
            url:"views/ajax/gestorAlbumEstudios.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            // habilitamos el dataType:"json" cuando vamos a mostrar la imagen en el recuadro de slide
            dataType:"json",

            beforeSend: function(){
                //11.  entonces que me muestre un gif cuando la img se esta subiendo al servidor
                $("#estudiosContenedorAgregar").before('<img src="views/images/status.gif" id="status">');

            },
            //12. que me muestre una respuesta
            success: function(respuesta){
                $("#status").remove();
                //13 si el tamano que estamos recibiendo no cumple con lo que pedimos entonces..
                if(respuesta == 0){
                        //14. muestrame una alerta
                    $("#estudiosContenedorAgregar").before('<div class="alert alert-warning alerta text-center">La imagen es inferior a 1600px * 600px</div>')

                } else{

                        //14.1 caso contrario
                        // 14.2 que el alto de #columnasSlide sea automatico
                    $("#estudiosContenedorAgregar").css({"height":"auto"});

                    $("#estudiosContenedorAgregar").append('<li class="bloqueSlide"><span class="fa fa-times eliminarSlide"></span><img src="'+respuesta["ruta"].slice(6)+'"></li>');

                    swal({
                            title: "¡OK!",
                            text: "¡La imagen se subió correctamente!",
                            type: "success",
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                        },
                        function(isConfirm){
                            if (isConfirm){
                                window.location = "albumEstudios";
                            }
                        });


                }


            }

        });
    }
})
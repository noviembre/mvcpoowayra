/*=============================================
        NUEVO TOUR
=============================================*/
$("#btnNuevoTour").click(function () {
    $("#btnNuevoTour").hide("fast");
    $("#btnCancelarTour").show("fast");
    $("#agregarTour").show("fast");
    $("#tablaTour").toggle();

})

/*=============================================
        CANCELAR TOUR
=============================================*/
$("#btnCancelarTour").click(function () {
    $("#btnNuevoTour").show("fast");
    $("#btnCancelarTour").hide("fast");
    $("#agregarTour").hide("fast");
    $("#tablaTour").toggle();
})


/*=============================================
Subir Imagen a través del Input         
=============================================*/
$("#subirFoto").change(function(){

    imagen = this.files[0];

    //Validar tamaño de la imagen

    imagenSize = imagen.size;

    if(Number(imagenSize) > 2000000){

        $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">El archivo excede el peso permitido, 200kb</div>')

    }

    else{

        $(".alerta").remove();

    }

    // Validar tipo de la imagen

    imagenType = imagen.type;

    if(imagenType == "image/jpeg" || imagenType == "image/png"){

        $(".alerta").remove();
    }

    else{

        $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">El archivo debe ser formato JPG o PNG</div>')

    }

    /*=============================================
    Mostrar imagen con AJAX
    =============================================*/
    if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png"){

        var datos = new FormData();

        datos.append("imagen", imagen);

        $.ajax({
            url:"views/ajax/gestorTours.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){

                $("#arrastreImagenArticulo").before('<img src="views/images/status.gif" id="status">');

            },
            success: function(respuesta){

                $("#status").remove();

                if(respuesta == 0){

                    $("#arrastreImagenArticulo").before('<div class="alert alert-warning alerta text-center">La imagen es inferior a 570px * 320px</div>')

                }else{

                    $("#arrastreImagenArticulo").html('<div id="imagenArticulo"><img src="'+respuesta.slice(6)+'" class="img-thumbnail"></div>');

                }

            }

        })

    }

})

/*=============================================
Editar PROYECTO
=============================================*/

$(".editarTourx").click(function(){

    idTour = $(this).parent().parent().attr("id");
    rutaImagen = $("#"+idTour).children("img").attr("src");
    titulo = $("#"+idTour).children("h1").html();
    estado = $("#"+idTour).children("h4").html();
    soles = $("#"+idTour).children("input[name^=ngtSoles]").val();
    dolares = $("#"+idTour).children("input[name^=ngtDolares]").val();
    descripcion = $("#"+idTour).children("input[name^=ngtDescripcion]").val();
    incluye = $("#"+idTour).children("input[name^=ngtIncluye]").val();
    noincluye = $("#"+idTour).children("input[name^=ngtNoIncluye]").val();
    itinerario = $("#"+idTour).children("input[name^=ngtItinerario]").val();
    quellevar = $("#"+idTour).children("input[name^=ngtQueLlevar]").val();

    $("#"+idTour).html('<form method="post" enctype="multipart/form-data"><span><input style="width:10%; padding:5px 0; margin-top:4px" type="submit" class="btn btn-primary pull-right" value="Guardar"></span><div id="editarImagen"><input style="display:none" type="file" id="subirNuevaFoto" class="btn btn-default"><div id="nuevaFoto"><span class="fa fa-times cambiarImagen"></span><img src="'+rutaImagen+'" class="img-thumbnail"></div></div><label for="" style="width: 5%">Tour:</label> <input type="text" value="'+titulo+'" name="editarTitulo" style="width: 69%" required><label for="" style="width: 5%">Estado:</label><select name="editarEstado" id="" style="width: 30%"><option value="'+estado+'">'+estado+'</option><option value="publicado">Publicar</option></select><label for="" style="width: 5%">Dolares:</label><input name="editarDolares" value="'+dolares+'" type="number" style="width: 12%" required><label for="" style="width: 5%">Soles:</label><input name="editarSoles" value="'+soles+'" type="number" style="width: 12%" required><hr><label for="" style="width: 45%;padding: 10px">Descripcion:</label><textarea name="editarDescripcion" id="editarContenido" title="Descripcion..." cols="30" rows="3" style="margin-top: 10px;">'+descripcion+'</textarea><label for="" style="width: 45%; padding: 10px">Incluye:</label><label for="" style="width: 45%; padding: 10px">No Incluye:</label><textarea name="editarIncluye" title="Incluye..." cols="30" rows="10">'+incluye+'</textarea><textarea name="editarNoIncluye" title="No Incluye..." cols="30" rows="10">'+noincluye+'</textarea><label for="" style="width: 45%; padding: 10px">Itinerario:</label><label for="" style="width: 45%; padding: 10px">Que Llevar:</label><textarea name="editarItinerario" title="Itinerario..." cols="30" rows="10">'+itinerario+'</textarea><textarea name="editarQueLlevar" title="Que Llevar..." cols="30" rows="10">'+quellevar+'</textarea><input type="hidden" value="'+idTour+'" name="id"><input type="hidden" value="'+rutaImagen+'" name="fotoAntigua"><hr></form>');

    $(".cambiarImagen").click(function(){

        $(this).hide();

        $("#subirNuevaFoto").show();
        $("#subirNuevaFoto").css({"width":"90%"});
        $("#nuevaFoto").html("");
        $("#subirNuevaFoto").attr("name","editarImagen");
        $("#subirNuevaFoto").attr("required",true);

        $("#subirNuevaFoto").change(function(){

            imagen = this.files[0];
            imagenSize = imagen.size;

            if(Number(imagenSize) > 2000000){

                $("#editarImagen").before('<div class="alert alert-warning alerta text-center">El archivo excede el peso permitido, 2MB</div>')

            }

            else{

                $(".alerta").remove();

            }

            imagenType = imagen.type;

            if(imagenType == "image/jpeg" || imagenType == "image/png"){

                $(".alerta").remove();

            }

            else{

                $("#editarImagen").before('<div class="alert alert-warning alerta text-center">El archivo debe ser formato JPG o PNG</div>')

            }

            if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png"){

                var datos = new FormData();

                datos.append("imagen", imagen);

                $.ajax({
                    url:"views/ajax/gestorTours.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function(){

                        $("#nuevaFoto").html('<img src="views/images/status.gif" style="width:15%" id="status2">');

                    },
                    success: function(respuesta){

                        $("#status2").remove();

                        if(respuesta == 0){

                            $("#editarImagen").before('<div class="alert alert-warning alerta text-center">La imagen es inferior a 570px * 320px</div>')

                        }

                        else{

                            $("#nuevaFoto").html('<img src="'+respuesta.slice(6)+'" class="img-thumbnail">');

                        }

                    }

                })

            }

        })

    })

})


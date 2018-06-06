

/*=====  Fin de SCROLL   ======*/

/*=============================================
 VALIDAR MENSAJES
 =============================================*/

function validarMensaje(){

    nombres = $("#nombres").val();
    apellidos = $("#apellidos").val();
    mensaje = $("#mensaje").val();

    if(nombres != "" ){

        var caracteres = nombres.length;
        var expresion = /^[a-zA-Z\s]*$/;

        if(!expresion.test(nombres)){

            $("#nombres").after('<div class="alert alert-warning">No se permiten números ni caracteres especiales.</div>');

            return false;
        }

    }

    if(apellidos != "" ){

        var caracteres = apellidos.length;
        var expresion = /^[a-zA-Z\s]*$/;

        if(!expresion.test(apellidos)){

            $("#apellidos").after('<div class="alert alert-warning">No se permiten números ni caracteres especiales.</div>');

            return false;
        }

    }



    else if(mensaje != ""){

        var caracteres = mensaje.length;
        var expresion = /^[a-zA-Z0-9\s]*$/;

        if(!expresion.test(mensaje)){

            $("#mensaje").after('<div class="alert alert-warning">No se permiten caracteres especiales.</div>');

            return false;

        }


    }

    return true;

}




/*=====  Fin de SCROLL   ======*/

/*=============================================
 VALIDAR RESERVA
 =============================================*/

function validarReserva(){

    nombres = $("#nombres").val();
    cantidad = $("#cantidad").val();
    mensaje = $("#mensaje").val();

    if(nombres != "" ){

        var caracteres = nombres.length;
        var expresion = /^[a-zA-Z\s]*$/;

        if(!expresion.test(nombres)){

            $("#nombres").after('<div class="alert alert-warning">Specials Characters is not allowed.</div>');

            return false;
        }

    }

    if(cantidad != "" ){

        var caracteres = cantidad.length;
        var expresion = /^[a-zA-Z\s]*$/;

        if(!expresion.test(cantidad)){

            $("#cantidad").after('<div class="alert alert-warning">Specials Characters is not allowed.</div>');

            return false;
        }

    }



    else if(mensaje != ""){

        var caracteres = mensaje.length;
        var expresion = /^[a-zA-Z0-9\s]*$/;

        if(!expresion.test(mensaje)){

            $("#mensaje").after('<div class="alert alert-warning">No se permiten caracteres especiales.</div>');

            return false;

        }


    }

    return true;

}

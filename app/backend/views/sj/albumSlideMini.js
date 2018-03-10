var numeroSlide = 1;
var formatearLoop = false;
var cantidadImg = $("#slide ul li").length;

$("#slide ul").css({"width": (cantidadImg*100) + "%"})
$("#slide ul li").css({"width": (100/cantidadImg) + "%"})

for(var i= 0; i < cantidadImg; i++){

    $("#indicadores").append('<li role-slide="'+(i+1)+'"><span class="fa fa-circle"></span></li>');

}

/* INDICADORES */
$("#indicadores li").click(function(){

    var roleSlide = $(this).attr("role-slide");

    $("#slide ul li").css({"display":"none"});

    $("#slide ul li:nth-child("+roleSlide+")").fadeIn();

    $("#indicadores li").css({"opacity":".5"});

    $("#indicadores li:nth-child("+roleSlide+")").css({"opacity":"1"});

    formatearLoop = true;

    numeroSlide = roleSlide;

})

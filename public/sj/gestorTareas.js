/*=============================================
Mostrar Agregar Tarea
=============================================*/
$("#btnAgregarTarea").click(function () {

    $("#divAgregar").toggle(400)

})

$("#btnTareaMesAnterior").click(function () {

    $("#divTareasMesActual").toggle(400)
    $("#tareaMesActualTitulo").toggle(400)



    $("#divTareasMesAnterior").show(400)
    $("#tareaMesAnteriorTitulo").show(400)


    // $("#tareaMesAnteriorTitulo").toggle(400)
    // $("#divTareasMesAnterior").toggle(400)


})
// BOTON TAREAS DEL MES
// PAGINA TAREASMES
// $("#btnTareaMes").click(function () {
//     $("#divTareasSinConcluir").toggle(400)
//     $("#textoSinConcluir").toggle(400)
//     $("#tablaSinConcluir").toggle(400)
//
//     $("#btnTareaMes").toggle(400)
//     $("#btnTareavolver").toggle(400)
//
//     $("#divTareasdelMes").toggle(400)
//     $("#tituloTareaMes").toggle(400)
//     $("#tablaTareasMes").toggle(400)
//
// })


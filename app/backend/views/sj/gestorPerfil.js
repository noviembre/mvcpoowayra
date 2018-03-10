/*=============================================
 OPEN FORM
 =============================================*/
$("#registrarPerfil").click(function(){

    $("#formularioPerfil").toggle("fast");

})

$("#fotoDePerfil").change(function(){
    //que el id subirFotoPerfil se le asigne un nuevo nombre llamado nuevaImagen
    $("#fotoDePerfil").attr("name","newImagen")
});

//Editing Profile
$("#btnEditProfile").click(function () {
    //$("#");
    $("#editProfile").hide("fast");
    $("#formEditProfile").show("fast");

})
$("#changePhotoProfile").change(function () {
    $("#changePhotoProfile").attr("name","editImage")
});
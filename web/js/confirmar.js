function confirmarEliminar(id){
    var rsp = confirm("¿Desea Eliminar el registro?");
    if (rsp == true){
        $('#idDelete').value(id);
        $('frmDelete').submit();
    }
}
function borrarSeleccion(){
    var rsp = confirm("¿Desea Eliminar los registro?");
    if (rsp == true){
        $('frmDeleteAll').submit();
    }
}
$(document).ready(function(){
   $('#chkAll').click(function(){
       $('input[name="chk[]"]').each(function(index,element){
        if($('#chkAll').is(':checked') && $(element).is(':checked') == false){
             $(element).prop('checked',true);
         } else if($('#chkAll').is(':checked') == false && $(element).is(':checked') == true){
             $(element).prop('checked',false);
         }
       });
   });
});


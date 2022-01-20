$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: 'php/getDepartamentos.php',
        data: {'peticion':'obtener_departamentos'}
    })
    
    .done(function(lista_departamentos){
        
        $('#departamento1').html(lista_departamentos)
    })
    .fail(function(){
        alert('Error el cargar departamentos')
    })
    $('#departamento1').on('change',function(){
        var id = $('#departamento1').val()
        $.ajax({
            type: 'POST',
            url: 'php/getMunicipios.php',
            data: {'id' : id}
        })
        
        .done(function(lista_municipios){
            $('#municipio1').html(lista_municipios)
        })
        .fail(function(){
            alert('Error el cargar municipios')
        })     
    })
});
$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: 'php/getTipoTercero.php',
        data: {'peticion':'obtener_tipo_terceros'}
    })
    
    .done(function(lista_tipo_terceros){
        
        $('#tipoTercero1').html(lista_tipo_terceros)
    })
    .fail(function(){
        alert('Error el cargar tipos de tercero')
    })
});
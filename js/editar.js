$('.editbtn').on('click',function(){
    $tr=$(this).closest('tr');
    var datos=$tr.children("td").map(function(){
      return $(this).text();
    });
    $('#update_id').val(datos[0]);
    $('#primerNombre').val(datos[6]);
    $('#segundoNombre').val(datos[7]);
    $('#primerApellido').val(datos[8]);
    $('#segundoApellido').val(datos[9]);
    $('#tipodocumento').val(datos[3]);
    $('#numerodocumento').val(datos[4]);
});

$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: 'php/getDepartamentos.php',
        data: {'peticion':'obtener_departamentos'}
    })
    
    .done(function(lista_departamentos){
        
        $('#departamento2').html(lista_departamentos)
    })
    .fail(function(){
        alert('Error el cargar departamentos')
    })
    $('#departamento2').on('change',function(){
        var id = $('#departamento2').val()


        $.ajax({
            type: 'POST',
            url: 'php/getMunicipios.php',
            data: {'id' : id}
        })
        
        .done(function(lista_municipios){
            $('#municipio2').html(lista_municipios)
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
        
        $('#tipoTercero2').html(lista_tipo_terceros)
    })
    .fail(function(){
        alert('Error el cargar tipos de tercero')
    })
});
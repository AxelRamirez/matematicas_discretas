$(document).ready(function(){
    // carga la paginacion
    loadPagination();
    $('body').on('change', 'select[name="dt-ajax-array_length"]', function(){
        loadPagination();
    });
});
   function loadPagination(pageno=1){
       //tomna el valor de registros por pagina
    var pagesPerRow = parseInt($('select[name="dt-ajax-array_length"]').val());
    var filter = '';
    $.ajax({
        url: base_url+"user/loadRecords/"+pageno+'/'+pagesPerRow,
        type: "GET",
        dataType: "JSON",
        data: {
            Filter: filter
        },
        success: data => {
            console.log(data)
            var dataUser = data.pagination.result;
            $('table tbody').empty();
            for (let i = 0; i < dataUser.length; i++) {
                $('table tbody').append(`
                    <tr role="row" class="even">
                        <td class="sorting_1">${dataUser[i].first_name} ${dataUser[i].last_name}</td>
                        <td>${dataUser[i].rol_name}</td>
                    </tr>
                `);
            }
            $('#dt-ajax-array_paginate').html(data.pagination.pagination);
            $('#dt-ajax-array_info').html(`Showing ${dataUser.length} to ${pagesPerRow} of ${dataUser.length} entries`)
        },error: (req) => {
            alert("ERROR!");
            console.log(req);
        }
    }).done(() => {
    });
    //se hace la peticion para la paginacion
    //    $.getJSON(base_url+"user/loadRecords/"+pageno+'/'+pagesPerRow,{Filter: filter})
    // .done(function( json ) {
    //     var data = json.result;
    //     // se asigna la paginacion al div correspondiente
    //     // $('#pagination').html(json.pagination);
    //     // //se vacia la tabla actual de los registros
    //     // $('#postsList tbody').empty();
    //     // //se recorren los registros para llenar la tabla
    //     for (let i = 0; i < data.length; i++) {
    //         data[i];
    //         $('.listUsers').append(`
    //             <div class="align-middle m-b-35">
    //                 <img src="jpg/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
    //                 <div class="d-inline-block">
    //                     <a href="#!"><h6>${data[i].first_name} ${data[i].last_name}</h6></a>
    //                         <p class="text-muted m-b-0">Cheers!</p>
    //                     <span class="status active"></span>
    //                 </div>
    //             </div>
    //         `);
    //     }
    // })
    // .fail(function( jqxhr, textStatus, error ) {
    //       var err = textStatus + ", " + error;
    //       console.log("Request Failed: " + err );
    //       console.log("response Text: " + jqxhr.responseText );
    // });
}
$('#container_search').on('change',function(e){
    loadPagination();
});
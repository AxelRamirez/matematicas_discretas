//Dias de la semana
var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

var first = $(location).attr('pathname');
first.indexOf(1);
first.toLowerCase();
first = first.split("/")[1];
var host = window.location.origin;
var base_url = window.location.origin+"/"+first+"/";

function notify(message,type){
    Console.log(message,type)
};
// $(document).ready(function(){
//     rowPerPages();
//     // evitar que recarge la pagina la paginacion y hacerlo por ajax
//     $('#pagination').on('click','a',function(e){
//         e.preventDefault(); 
//         //tomar la paginacion al cual se le dio click
//         var pageno = $(this).attr('data-ci-pagination-page');
//         //cargar el numero de pagina necesario
//         loadPagination(pageno);
//         });
//     //cambiar los registros por pagina al cambiar el select
//     $('#pagesPerRow').on('change',function(e){
//         e.preventDefault(); 
//         loadPagination();
//     });
//     function rowPerPages(){
//         $('#pagesPerRow').append(`
//             <option value="1">1</option>
//             <option value="3">3</option>
//             <option value="5" selected>5</option>
//             <option value="10">10</option>
//             <option value="15">15</option>
//             <option value="20">20</option>
//             <option value="-1">All</option>
//         `);
//     }
// });
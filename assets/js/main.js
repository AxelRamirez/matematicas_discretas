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

var files = [];
var indexFile = 0;

$(document).ready(function(){
    rowPerPages();
    $('#uploadFile').change(convertFiles);
    //Ver/Descargar Archivos
    $('body').on('click', '.showFile', function(){
        var base64 = $(this).parent().find('input[name="file_base64[]"]').val();
    });
    $('body').on('click', '.removeFile', function(){
        var id = parseInt($(this).attr('data-id'));
        $.ajax({
            url: base_url+'Files/delete/',
            type: 'POST',
            dataType: 'json',
            data: {
                Id: id
            },
            success: (data)=>{
                switch (data.code) {
                    case 200:
                        notifyAlert('¡Excelente!','Archivo eliminado',data.code);
                        $(this).parent().remove();
                        break;
                    case 403:
                        notifyAlert('¡Error!','Hubo un error al eliminar el archivo.',data.code);
                        break;
                    case 404:
                        notifyAlert('¡Error!','Por favor contacta a soporte.',data.code);
                        break;
                    case 500:
                        notifyAlert('¡Error!','Internal Server Error.',data.code);
                        break;
                    default:
                        break;
                }
            },
            error: (req, msg, error)=>{
                notifyAlert('Internal Server Error','Please contact your support.',500);
                console.log(req);
                console.log(error);
                console.log(msg);
            }
        })
    });
});
function rowPerPages(){
    $('#pagesPerRow').append(`
        <option value="10" selected>10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="50">50</option>
    `);
}
function notifyAlert(title,msg,code){
    var type = '';
    code == 200 ? type = 'success' : type = 'danger';
    code == 403 ? type = 'warning' : type = type;

    $('body').append(`
        <div class="alert alert-${type} alert-dismissible fade show activeAlert" role="alert" style="position:fixed;right:10px;top:10px;z-index:9999;">
            <strong>${title}</strong> ${msg}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    `);
    setTimeout(function(){
        outAlert();
    },5000);
}
function outAlert(){
    $('.activeAlert').remove();
}

async function convertFiles(){
    isFileUpload = true;
    for(var i = 0; i < this.files.length; i++){
      await encodeBase64(this.files[i]);
    }
    isFileUpload = false;
}
function encodeBase64(file){
    return new Promise((resolve, reject) => {
        var reader = new FileReader();
        reader.onload = () => {
            var file64 = {};
            file64.name = file.name;
            file64.type = file.type;
            file64.fileBase64 = reader.result;
            file64.status = 2;
            file64.documentid = 0;
            file64.index = indexFile;
            files.push(file64);
            indexFile++;
            $('#filesBox').append(putDocument({
                documentid: file64.documentid,
                original_name: file64.name,
                type: file64.type,
                base64: file64.fileBase64,
                description: ''
            }, file64.index));
            resolve();
            var unit = $('#uploadFile').attr('data-unit');
            saveFile(unit,file64.name,file64.type,file64.fileBase64);
            $('.zeroFiles').hide();
      }
      if(file){
          reader.readAsDataURL(file);
      }
      else{
        reject();
      }
    });
}
function putDocument(document, index, first=false){
    var unit = $('#uploadFile').attr('data-unit');
    return `
    <div class="w-50 d-flex flex-row alig-items-center justify-content-start">
        <p class="m-0 showFile">${document.original_name}</p>
        <input type="hidden" name="file_unit[]" value="${unit}"/>
        <input type="hidden" name="file_name[]" value="${document.original_name}"/>
        <input type="hidden" name="file_type[]" value="${document.type}"/>
        <input type="hidden" name="file_base64[]" value="${document.base64}"/>
    </div>`;
}
function saveFile(unit,name,type,base64){
    // var baseStr = base64.split(';');
    $.ajax({
        url: base_url+'Files/save/',
        type: 'POST',
        dataType: 'json',
        data: {
            Unit: unit,
            Name: name,
            Type: type,
            Base: base64
        },
        success: (data)=>{
            console.log(data)
            switch (data.code) {
                case 200:
                    notifyAlert('¡Excelente!','Archivo agregado',data.code);
                    break;
                case 403:
                    notifyAlert('¡Error!','Hubo un error al agregar el archivo.',data.code);
                    break;
                case 404:
                    notifyAlert('¡Error!','Por favor contacta a soporte.',data.code);
                    break;
                case 500:
                    notifyAlert('¡Error!','Internal Server Error.',data.code);
                    break;
                default:
                    break;
            }
        },
        error: (req, msg, error)=>{
            notifyAlert('Internal Server Error','Please contact your support.',500);
            console.log(req);
            console.log(error);
            console.log(msg);
        }
    })
}
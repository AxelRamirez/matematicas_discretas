$(document).ready(function(){
    $('body').on('click','#output',function(){
        var n = $('#baseConvert').val();
        var initial = $('#in').val();
        var base = $('#out').val();
        convert(n,initial,base);
    });
});
function convert(n,initial,base){
    var out;
    if (n < 0) {
        n = 0xFFFFFFFF + n + 1;
    } 
    //Convertir de decimal a otro sistema
    if(initial == 'D'){
        switch (base){ 
            case 'D':
                //Decimal - Decimal  
                out = parseInt(n);
                break;  
            case 'B':  
                //Decimal - Binario
                out = parseInt(n, 10).toString(2);
                break;  
            case 'H':  
                //Decimal - Hexadecimal
                out = parseInt(n, 10).toString(16);
                break;  
            case 'O':  
                //Decimal - Octal
                out = parseInt(n, 10).toString(8);
                break;  
            default:  
                $('.result-convert').html('<p>Wrong input.........</p>'); 
        }
    }
    //Convertir de binario a otro sistema
    if(initial == 'B'){
        switch (base){ 
            case 'D':  
                //Binario - Decimal
                out = parseInt(n, 2);
                break;  
            case 'B':  
                //Binario - Binario
                out = n;
                break;  
            case 'H':  
                //Binario - Hexadecimal
                out = parseInt(n, 2).toString(16);
                break;  
            case 'O':  
                //Binario - Octal
                out = parseInt(n, 2).toString(8);
                break;  
            default:  
                $('.result-convert').html('<p>Wrong input.........</p>');
        }
    }
    //Convertir de Hexadecimal a otro sistema
    if(initial == 'H'){
        switch (base){ 
            case 'D':  
                //Hexadecimal - Decimal
                out = parseInt(n, 16).toString(10);
                break;  
            case 'B': 
                //Hexadecimal - Binario 
                out = parseInt(n, 16).toString(2);
                break;  
            case 'H':  
                //Hexadecimal - Hexadecimal
                out = n;
                break;  
            case 'O': 
                //Hexadecimal - Octal 
                out = parseInt(n, 16).toString(8);
                break;  
            default:  
                $('.result-convert').html('<p>Wrong input.........</p>');
        }
    }
    //Convertir de Octal a otro sistema
    if(initial == 'O'){
        switch (base){ 
            case 'D':  
                //Octal - Decimal
                out = parseInt(n, 8).toString(10);
                break;  
            case 'B':  
                //Octal - Binario
                out = parseInt(n, 8).toString(2);
                break;  
            case 'H':  
                //Octal - Hexadecimal
                out = parseInt(n, 8).toString(16);
                break;  
            case 'O':  
                //Octal - Octal
                out = n;
                break;  
            default:  
                $('.result-convert').html('<p>Wrong input.........</p>');
        }
    }
    out = out.toString();
    if(out == 'NaN' || out == 'null' || out == 'undefined'){
        out = '-';
    }
    $('.result-convert').html('<h3>Resultado: '+out+'</h3>');
}

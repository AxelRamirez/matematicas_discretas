<?php $this->load->view('navbar');?>
<style type="text/css">
a:link {color:#4B2EDE;text-decoration:none;}      /* unvisited link */
a:visited {color:#4B2EDE;text-decoration:none;}  /* visited link */
a:hover {color:#9D90DC;text-decoration:none;}  /* mouse over link */
a:active {color:#FFA04D;text-decoration:none;}  /* selected link */

#title {
text-align:center;
font-size:24px;
margin-top:15px;
margin-bottom:15px;
}

td.space {
width:1em;
}

#tt {
margin: 0 auto;
padding: 1em;
border-top:solid 1px #d3d3d3;
border-bottom:solid 1px #d3d3d3;
min-height:5em;
}

#tt div.center {
margin: 0 auto;
display:table;
}

table.truth {
border-collapse:collapse;
margin:0 auto;
}

table.truth th {
border-bottom:1px solid black;
text-align: center;
padding:.2em;
font-weight: normal;
}

table.truth td {
border:0;
padding:.2em;
}

table.truth .dv {
border-right:1px solid black;
}

table.truth .mc {
color:red;
}
</style>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/circuitos/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>GENERADOR DE TABLAS DE VERDAD</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Esta herramienta generará una tabla de verdad dada una fórmula bien formada de lógica de verdad funcional. 
                Puede ingresar múltiples fórmulas separadas por comas para incluir más de una fórmula en una sola tabla (por ejemplo, para probar la vinculación). 
                Las tablas se pueden mostrar en html (ya sea la tabla completa o la columna debajo del conectivo principal solamente), texto sin formato. 
                También puede seleccionar qué símbolos usar para los dos valores de verdad y los conectivos.</p>
            </div>
            <div class="my-4" id="tt"></div>
            <div class="col-lg-12 col-md-12 py-4" style="background: #101010;">
                <div class="col-lg-12">
                    <input type="text" class="form-control" id="in"/>
                </div>
                <div class="col-lg-12 py-1">
                    <input type="button" class="cleanValue optionCalculator btn btn-secondary" value="AC"/>
                    <input type="button" class="delValue optionCalculator btn btn-secondary" value="DEL"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="("/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value=")"/>
                </div>
                <div class="col-lg-12 py-1">
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="A"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="B"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="C"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="D"/>
                </div>
                <div class="col-lg-12 py-1">
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="~"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="&"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="v"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value=">"/>
                </div>
                <div class="col-lg-12 py-1">
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="<>"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="#"/>
                    <input type="button" class="valueIn optionCalculator btn btn-secondary" value="|"/>
                    <input type="button" class="optionCalculator btn btn-primary" value="=" onclick="construct();">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12 pt-2">
                <label for="tvstyle">Símbolos de valor de verdad:</label><br>
                <input type="radio" name="tvstyle" value="tf" checked>T/F<br>
                <input type="radio" name="tvstyle" value="tb">&#8868;/&perp;<br>
                <input type="radio" name="tvstyle" value="oz">1/0<br>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12 pt-2">
                <label for="cset">Símbolos conectivos:</label><br>
                <input type="radio" name="cset" value="cs1" checked>&not;, &and;, &or;, &rarr;, &harr;<br>
                <input type="radio" name="cset" value="cs2">~, &amp;, &or;, &rarr;, &harr;<br>
                <input type="radio" name="cset" value="cs3">~, &amp;, &or;, &sup;, &equiv;<br>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12 pt-2">
                <label for="style">Tipo de la tabla:</label><br>
                <input type="radio" name="style" id="full" checked>Toda la tabla<br>
                <input type="radio" name="style" id="main">Conexión principal<br>
                <input type="radio" name="style" id="text">Tabla en texto<br>
                <input type="radio" name="style" id="latex" hidden>
            </div>
        </div>
        <table class="mt-4">
            <tr><td>~</td><td>Para negación</td></tr>
            <tr><td>&amp;</td><td>Para conjunción</td></tr>
            <tr><td>v</td><td>Para disyunción</td></tr>
            <tr><td>&gt;</td><td>Para condición</td></tr>
            <tr><td>&lt; &gt;</td><td>Para bicondicional</td></tr>
            <tr><td>#</td><td>Para falso</td></tr>
            <tr><td>|</td><td>Para NAND</td></tr>
        </table>
        <table class="mt-4">
            <tr>
                <td><b>Aquí hay algunos ejemplos de entradas bien formadas que el programa aceptará:</b></td>
            </tr>
            <tr><td>~A</td></tr>
            <tr><td>(A & B)</td></tr>
            <tr><td>(# > (B v ~A))</td></tr>
            <tr><td>(A & (~B > C))</td></tr>
            <tr><td>(A<>(BvC)), A, (~B>C)</td></tr>
        </table>
    </div>
</main>
<script type="text/javascript" src="<?= base_url()?>assets/js/truthtable.js"></script>
<script type="text/javascript">
var sc_project=10143714; 
var sc_invisible=1; 
var sc_security="d4b1e890"; 
var sc_client_storage="disabled"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free web stats"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/10143714/0/d4b1e890/1/" alt="free
web stats"></a></div></noscript>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<script>
$(document).ready(function(){
    $('body').on('click', '.valueIn', function(){
        console.log($(this).val());
        var actual = $('#in').val();
        var new_value = '';
        if(actual.length > 0){
            new_value = actual + $(this).val();
        }else{
            new_value = $(this).val();
        }
        $('#in').val(new_value);
    });
    $('body').on('click', '.cleanValue', function(){
        $('#in').val('');
    });
    $('body').on('click', '.delValue', function(){
        var actual = $('#in').val();
        actual = actual.slice(0,-1);
        $('#in').val(actual);
    });
});
</script>
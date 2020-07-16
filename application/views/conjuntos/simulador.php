<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/conjuntos/banner.png" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>SIMULADOR DE CONJUNTOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 text-center">
                <label for="conjuntoA">Conjunto A</label>
                <input type="text" id="conjuntoA" class="form-control" placeholder="Ejemplo: 1,2,3,4,5,...">
            </div>
            <div class="col-lg-6 col-sm-12 text-center">
                <label for="conjuntoB">Conjunto B</label>
                <input type="text" id="conjuntoB" class="form-control" placeholder="Ejemplo: a,b,c,d,e,f,...">
            </div>
            <div class="col-lg-3 pt-2">
                <button data-out="C" class="btn btn-secondary form-control getResult">Complemento</button>
            </div>
            <div class="col-lg-3 pt-2">
                <button data-out="U" class="btn btn-secondary form-control getResult">Unión</button>
            </div>
            <div class="col-lg-3 pt-2">
                <button data-out="D" class="btn btn-secondary form-control getResult">Diferencia</button>
            </div>
            <div class="col-lg-3 pt-2">
                <button data-out="I" class="btn btn-secondary form-control getResult">Intersección</button>
            </div>
            <div class="col-lg-3 pt-2">
                <button data-out="DS" class="btn btn-secondary form-control getResult">Diferencia Simetrica</button>
            </div>
            <div class="col-lg-12 pt-2 text-center result-convert">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<script type="text/javascript">
$(document).ready(function(){
    $('body').on('click','.getResult',function(){
        var A = $('#conjuntoA').val();
        var B = $('#conjuntoB').val();
        var out = $(this).attr('data-out');
        generate(A,B,out);
    });
});
function generate(A,B,out){
    var conjuntoA = A.split(",");
    var conjuntoB = B.split(",");
    var resultado;

    switch (out) {
        case 'C':
            resultado = conjuntoA.filter(x => -1 == conjuntoB.indexOf(x));
            break;
        case 'U':
            resultado = conjuntoA.concat(conjuntoB);
            break;
        case 'D':
            resultado = conjuntoA.filter(x => !conjuntoB.includes(x));
            break;
        case 'I':
            resultado = conjuntoA.filter(x => conjuntoB.includes(x));
            break;
        case 'DS':
            resultado = conjuntoA.filter(x => !conjuntoB.includes(x)).concat(conjuntoB.filter(x => !conjuntoA.includes(x)));
            break;
        default:
            break;
    }
    resultado =  resultado.toString();
    $('.result-convert').html('<h3>Resultado: '+resultado+'</h3>');
}

</script>
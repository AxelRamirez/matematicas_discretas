<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>3.1 TABLAS DE VERDAD</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <b><p>Una tabla de verdad de una proposición es una descripción organizada de los valores de verdad de la proposición 
                para todos los valores posibles de la variables proposicionales que aparecen en ella. </p></b>
                <h3>Tabla de verdad de la negación</h3>
                <img src="<?= base_url()?>assets/images/logica/negacion.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Tabla de verdad de la Disyunción (O)</h3>
                <img src="<?= base_url()?>assets/images/logica/disyuncion.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Tabla de verdad de la Conjunción (Y)</h3>
                <img src="<?= base_url()?>assets/images/logica/conjuncion.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Tabla de verdad Condicional</h3>
                <img src="<?= base_url()?>assets/images/logica/condicional.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Tabla de verdad Bicondicional</h3>
                <img src="<?= base_url()?>assets/images/logica/bicondicional.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Tautología</h3>
                <p>Una proposición compuesta es una tautología si es verdadera para todas las asignaciones 
                de valores de verdad  para sus proposiciones componentes. Dicho de otra forma, su valor 
                V no depende de los valores de verdad de las proposiciones que la forman, sino de la forma 
                en que están establecidas las relaciones sintácticas de unas con otras. Sea el caso: </p>
                <img src="<?= base_url()?>assets/images/logica/tautologia.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Contradicción</h3>
                <p>Se entiende por proposición contradictoria, o contradicción, aquella proposición que en 
                todos los casos posibles de su tabla de verdad su valor siempre es F. 
                Dicho de otra forma, su valor F no depende de los valores de verdad de las proposiciones
                que la forman, sino de la forma en que están establecidas las relaciones sintácticas de 
                unas con otras. Sea el caso:  </p>
                <img src="<?= base_url()?>assets/images/logica/contradiccion.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Contingencia</h3>
                <p>Se entiende por verdad contingente, o verdad de hecho, aquella proposición que puede ser 
                verdadera o falsa, (combinación entre tautología y contradicción) según los valores de 
                las proposiciones que la integran. Sea el caso:  </p>
                <img src="<?= base_url()?>assets/images/logica/contingencia.png" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
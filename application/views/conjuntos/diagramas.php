<?php $this->load->view('navbar');?>
<main>
    <div class="p-3">
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="<?= base_url()?>assets/images/logo_tecnm.png" style="height: 130px;" alt="">
            </div>
            <div class="col-lg-6 text-center">
                <img src="<?= base_url()?>assets/images/logo_itt.png" style="height: 130px;" alt="">
            </div>
            <div class="col-lg-12 text-center py-4">
                <h1>2.3 DIAGRAMAS DE VENN</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>2.3 DIAGRAMAS DE VENN </h3>
                <p>Los diagramas de Venn son la representación gráfica de las relaciones entre los conjuntos, estos se atribuyen al filósofo inglés John Venn (1834-1883).</p>
                <p>La manera de representar el conjunto Universal es un rectángulo y lo denotamos por la letra U.</p>
                <img src="<?= base_url()?>assets/images/conjuntos/diagramas_1.png" alt="">
                <br><br>
                <p>Como se puede observar en el diagrama anterior, se encuentra círculos denotados con mayúsculas, éstos representan los conjunto, A, B,C, los cuales se encuentran dentro del rectángulo, es decir, adentro del Universo que se está estudiando; además, es importante mencionar que todos los aspectos de interés se resaltan sombreando las áreas respectivas, por ejemplo: </p>
                <img src="<?= base_url()?>assets/images/conjuntos/diagramas_2.png" alt="">
                <br><br>
                <img src="<?= base_url()?>assets/images/conjuntos/diagramas_3.png" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
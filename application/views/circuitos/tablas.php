<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/circuitos/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="<?= base_url()?>assets/images/logo_tecnm.png" style="height: 130px;" alt="">
            </div>
            <div class="col-lg-6 text-center">
                <img src="<?= base_url()?>assets/images/logo_itt.png" style="height: 130px;" alt="">
            </div>
        </div>
        <div class="container">
            <div class="section-title">
                <h2>4.5 TABLAS DE VERDAD</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Son una representación gráfica de todos los casos que se pueden dar en una relación algebraica y de sus respectivos resultados.</p>
                <p>En cada tabla de verdad, las combinaciones posibles de niveles lógicos 0 y 1 para las entradas se enlistan del lado izquierdo y el nivel lógico resultante para la salida se enlista a la derecha. El número de combinaciones de la entrada será igual a 2n para una tabla de verdad de n entradas.</p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
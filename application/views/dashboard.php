<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/itt.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3">
        <div class="w-100 d-flex alig-items-center justify-content-between">
            <img src="<?= base_url()?>assets/images/logo_tecnm.png" style="height: 130px;" alt="">
            <img src="<?= base_url()?>assets/images/logo_itt.png" style="height: 130px;" alt="">
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>TECNOLÓGICO NACIONAL DE MÉXICO</h1>
            </div>
            <div class="col-lg-12 text-center">
                <h1>INSTITUTO TECNOLÓGICO DE TIJUANA</h1>
            </div>
            <div class="col-lg-12 pt-4 text-center">
                <img src="<?= base_url()?>assets/images/logo_isc.png" style="height: 130px;" alt="">
            </div>
            <div class="col-lg-12 pt-4 text-center">
                <h2>Ingeniería en Sistemas Computacionales</h2>
                <h3>Matemáticas Discretas</h3>
                <h4>Dr. Bogart Yail Márquez Lobato</h4>
            </div>
            <div class="col-lg-12 py-5 text-center">
                <img src="<?= base_url()?>assets/images/pc.png" style="width:100%" alt="">    
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
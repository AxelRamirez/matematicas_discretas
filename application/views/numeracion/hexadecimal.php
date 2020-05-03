<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/numeracion/banner.jpg" alt="Insituto Tecnologico de Tijuana">
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
                <h2>1.4 SISTEMA DE NUMERACIÓN HEXADECIMAL</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>El sistema hexadecimal emplea la base 16. Así, tiene 16 posibles símbolos digitales. Utiliza los dígitos del 0 al 9, más las letras A, B, C, D, E y F como sus 16 símbolos digitales. Cada dígito hexadecimal representa un grupo de cuatro dígitos binarios. Es importante recordar que los dígitos hex (Abreviatura de hexadecimal) de A a F son equivalentes a los valores decimales de 10 a 15. </p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
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
                <h2>INTRODUCCIÓN A LOS CIRCUITOS LÓGICOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Muchos componentes utilizados en sistemas de control presentan dos estados claramente diferenciables. El ejemplo más típico y conocido en el mundo de los automatismos, es el de los contactos y relés.</p>
                <p>En los automatismos lógicos se manejan continuamente los conceptos: abierto-cerrado, conduce-no conduce, activado-no activado, tensión alta o baja, mayor que o menor que, etc., siempre haciendo referencia a dos estados posibles.</p>
                <p>Para la sistematización del comportamiento de estos elementos, se representan los dos estados por los símbolos 0 y 1. De esta forma se podrá utilizar una serie de leyes y propiedades comunes a todos ellos, teniendo una independencia de la naturaleza física del componente en sí; es decir, bajo este punto de vista se tratará por igual un contacto (0 abierto, 1 cerrado) que un cilindro neumático (0 contraído, 1 extendido) o una electroválvula (0 no pasa, 1 pasa).</p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
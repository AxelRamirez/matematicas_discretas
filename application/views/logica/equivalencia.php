<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
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
                <h2>3.2 EQUIVALENCIA LÓGICA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Dos formas proposicionales α y β se dicen lógicamente equivalentes si y sólo si 
                    tienen valores de verdad idénticos para cualquier sustitución de valores de verdad 
                    de sus variables proposicionales. Esto se simbolizará </p>
                <b><p>α ≡ β </p></b>
                <p>Se deduce el procedimiento de verificación de la siguiente manera:</p>
                <ul>
                    <li>Construir las tablas de verdad de ambas expresiones: como dos columnas en una misma tabla. </li>
                    <li>Comparar las tablas renglón por renglón. </li>
                    <li>Si renglón a reglón tienen el mismo valor de verdad, son equivalentes.</li>
                    <li>Si hay al menos un renglón donde difieran, no son equivalentes. </li>
                </ul>
                <img src="<?= base_url()?>assets/images/logica/equivalencia.png" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
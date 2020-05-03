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
                <h2>4.4 TEOREMAS DEL ÁLGEBRA DE BOOLE</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Un álgebra de Boole, en virtud de las propiedades que por definición se le exigen, cumplen una serie de teoremas. Estos teoremas son de gran utilidad a la hora de transformar expresiones algebraicas de funciones lógicas en otras equivalentes.</p>
                <ul>
                    <li><b>Asociatividad</b></li>
                    <ul>
                        <li>a + (b + c) = (a + b) + c</li>
                        <li>a.(b.c) = (a.b).c</li>
                    </ul>
                    <li><b>Absorción</b></li>
                    <ul>
                        <li>a + a.b = a</li>
                        <li>a . (a + b) = a</li>
                    </ul>
                    <li><b>Idempotencia</b></li>
                    <ul>
                        <li>a + a = a ó a + ā = 1</li>
                        <li>a.a = a ó a.ā = 0</li>
                    </ul>
                    <li><b>Involución</b></li>
                    <ul>
                        <li>(ā) = a</li>
                    </ul>
                    <li><b>Incógnita</b></li>
                    <ul>
                        <li>X + 1 = 1</li>
                        <li>X.0 = 0</li>
                    </ul>
                    <li><b>Leyes de Morgan</b></li>
                    <ul>
                        <li>
                            <img src="<?= base_url()?>assets/images/circuitos/leyes_morgan.png" alt="">
                        </li>
                    </ul>
                    <li><b>Dualidad</b></li>
                </ul>
                <p>Cualquier expresión válida en un álgebra de Boole continua siendo válida si se intercambian entre sí los elementos neutros (0 – 1) y las operaciones (+ ↔.).</p>
                <p>Algunos de estos teoremas son generalizables a n variables, por ejemplo, las Leyes de Morgan: El complementario de una suma de variables es el producto de los complementarios de las variables, y el comportamiento de un producto de variables es igual a la suma de los complementarios de la suma.</p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
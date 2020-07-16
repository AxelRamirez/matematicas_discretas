<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/circuitos/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
        <div class="section-title">
                <h2>4.2 OPERACIONES BÁSICAS DEL ÁLGEBRA BOOLEANA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>4.2.1 Suma Lógica</h3>
                <p>Llamada también operación «O» (OR en inglés). Es una operación entre dos variables lógicas a y b, representadas por el símbolo +, y definida por la siguiente tabla:</p>
                <img src="<?= base_url()?>assets/images/circuitos/suma_logica.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>4.2.2 Producto Lógico</h3>
                <p>Se le llama también operación «Y» (AND en inglés). Es una operación entre dos variables lógicas a y b, representadas por el símbolo (.), y se define por la Tabla 2.2:</p>
                <img src="<?= base_url()?>assets/images/circuitos/producto_logico.png" alt="">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>4.2.3 Complementación o Inversión Lógica</h3>
                <p>Llamada también operación «NO» (NOT en inglés). Es una operación sobre una variable lógica a, representada por una barra elevada ( ¯ ) o una comilla (‘), y definida por la siguiente tabla:</p>
                <img src="<?= base_url()?>assets/images/circuitos/complementacion.png" alt="">
                <p>La regla general que se desprende de la Tabla son las siguientes:</p>
                <ul>
                    <li><b>a + ā = 1</b></li>
                    <li><b>a . ā = 0</b></li>
                    <li><b>ā ≠ a</b></li>
                </ul>
                <p>Cualquier relación entre variables lógicas puede representarse por combinación de éstas tres operaciones básicas.</p>
                <p>Se podrá ver el sentido práctico de éstas operaciones en relación al comportamiento de los contactos y relés. Para esto se tomará en cuenta el convenio que se indica a continuación en la Figura 2.1:</p>
                <img src="<?= base_url()?>assets/images/circuitos/componentes.png" alt="">
                <p>En la Figura 2.2, se muestra un sistema tomado por la lámpara y los dos contactos en paralelo, tiene un comportamiento que resulta ser idéntico al de la Tabla de la operación suma lógica, por lo tanto, se puede escribir:</p>
                <b><p>L = a + b</p></b>
                <p>En forma general, se indica que colocando contactos en paralelo equivale a efectuar con ellos una operación «O» ó suma lógica.</p>
                <p>Observando de la Figura 2.2 que al cerrar los dos contactos se enciende la lámpara, pero igual que lo haría uno solo, de ahí que desde un punto de vista lógico es lo mismo (1 + 0) ó (0 + 1) que (1 + 1).</p>
                <img src="<?= base_url()?>assets/images/circuitos/operacion_logica.png" alt="">
                <p>A continuación se muestra en la Figura 2.3, un conjunto formado por dos contactos en serie y una lámpara, teniendo un comportamiento que resulta ser idéntico al de la Tabla de la operación de multiplicación lógica, por lo tanto se puede escribir:</p>
                <b><p>L = a . b</p></b>
                <p>En forma general, se puede deducir que contactos en serie equivale a efectuar con ellos una operación «Y» ó multiplicación lógica. Se puede observar de la figura que al cerrar los dos contactos es la única manera de que se pueda encender la lámpara.</p>
                <img src="<?= base_url()?>assets/images/circuitos/operacion_logica2.png" alt="">
                <p>Para la esquematización de la operación «NO» se puede observar en la Figura 2.4, donde los contactos normalmente cerrados de un relé equivalen a efectuar dicha operación, entonces se cumple que:</p>
                <b><p>L = ā</p></b>
                <img src="<?= base_url()?>assets/images/circuitos/operacion_logica3.png" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
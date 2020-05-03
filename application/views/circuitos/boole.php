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
                <h2>4.1 ÁLGEBRA DE BOOLE</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Álgebra de Boole o álgebra booleana se le denomina a las reglas algebraicas basadas en la teoría de conjuntos para manejar ecuaciones de lógica matemática. La lógica matemática trata de proposiciones, elementos de circuitos de dos estados, etc.; asociados por medio de operadores como Y, O, NO, EXCEPTO, SI… ENTONCES. Y que por lo tanto permite cálculos y demostraciones como cualquier parte de las matemáticas. Es llamado así en honor a George Boole, famoso matemático que la introdujo en 1847.</p>
                <p>En otros términos se puede definir el álgebra de Boole como toda clase o conjunto de elementos que pueden tomar dos valores perfectamente diferenciados, que son designados por “0” y “1” y que están relacionados por dos operaciones binarias denominadas suma (+) y producto (.) lógicos que cumplen con los postulados siguientes.</p>
                <b><p>Propiedades</p></b>
                <ul>
                    <li>Ambas operaciones son conmutativas, es decir, si a y b son elementos del álgebra, se verifica:</li>
                    <ul>
                        <li>a + b = b + a</li>
                        <li>a.b = b.a</li>
                    </ul>
                    <li>Dentro del álgebra existen dos elementos neutros, el 1 y el 0; que cumplen con la propiedad de identidad con respecto a cada una de las operaciones</li>
                    <ul>
                        <li>0 + a = a</li>
                        <li>1.a = a</li>
                    </ul>
                    <li>Cada operación es distributiva respecto a la otra</li>
                    <ul>
                        <li>a.(b + c) = a.b + a.c</li>
                        <li>a + b.c = (a + b).(a + c)</li>
                    </ul>
                    <li>Para cada elemento “a” del álgebra existe un elemento denominado ā o a’, tal que</li>
                    <ul>
                        <li>a + ā = 1</li>
                        <li>a.ā = 0</li>
                    </ul>
                </ul>
                <p>Este último postulado define realmente una operación fundamental que es la inversión o complementación de una variable. La variable “a” se encuentra siempre en un estado binario contrario al de ā.</p>
                <p>Como complemento, se puede decir que el álgebra booleana es relativamente fácil de manejar en comparación con la ordinaria, ya que sólo pueden haber 2 valores. Aquí no hay fracciones, decimales, números negativos, raíces cuadradas, cúbicas, logaritmos o números imaginarios, etc.</p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
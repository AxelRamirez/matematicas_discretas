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
                <h2>3.4 LÓGICA DE PREDICADOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>La lógica de predicados estudia las frases declarativas con mayor grado de detalle, considerando la estructura interna de las proposiciones. Se tomara como elemento básico los objetos y las relaciones entre dichos objetos.</p>
                <p>Es decir, se distingue:</p>
                <ul>
                    <li>Que se afirma(predicado o relación)</li>
                    <li>De quien se afirma(objeto)</li>
                </ul>
                <p>Definimos a continuación las reglas sintácticas para construir fórmulas:</p>
                <br>
                <p>El alfabeto de la lógica de predicados estará formado por los siguientes conjuntos simbólicos:</p>
                <ul>
                    <li>Conjunto de Símbolos de Variables(VAR): Es un conjunto de las últimas letras del alfabeto en minúsculas. Se utilizan subíndices.</li>
                    <li>Conjunto de símbolos de Constantes (CONS): Este conjunto lo forman las primeras letras del alfabeto en minúsculas,también utilizaremos subíndices</li>
                    <li>Conjunto de letras de función(FUNC): Representaremos a este conjunto por las letras f,g,h,L. Incluimos subíndices para poder diferenciar las funciones</li>
                    <li>Conjunto de letras de Predicado (PRED): Se representan mediante letras mayúsculas</li>
                </ul>
                <br>
                <b><p>Símbolos de conectivas:</p></b>
                <ul>
                    <li>¬ = Negación</li>
                    <li>∨= Conectiva “o”</li>
                    <li>∧ = Conectiva “y”</li>
                    <li>→ = implicación</li>
                    <li>↔ = Doble implicación o equivalencia</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Cuantificadores</h3>
                <ul>
                    <li>∃=existencial</li>
                    <li>∀=Universal</li>
                </ul>
                <p>Ejemplos:</p>
                <ul>
                    <li>Todo numero es imaginario.</li>
                    <ul>
                        <li>∀(x)(N (x)→I(x)) se lee: “Para todo x tal que x es un numero entonces x es imaginario”</li>
                        <li>Recuerda que x puede tomar cualquier valor.</li>
                    </ul>
                    <li>Algun numero no es par.</li>
                    <ul>
                        <li>∃(x)(N (x)∧¬P(x)) se lee: “existe un x tal que x es un numero y no es par”</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
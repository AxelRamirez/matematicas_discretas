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
                <h2>4.3 COMPONENTES LÓGICOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Son circuitos electrónicos que operan con una o más señales de entrada para producir una señal de salida. Existen señales como voltajes o corrientes eléctricas en un sistema digital en uno u otro de dos valores reconocibles. Los circuitos operados por tensión responden a dos niveles de voltajes independientes que representan una variable binaria igual a un “1” lógico ó “0” lógico. Por ejemplo, un sistema digital puede definir como el cero lógico, como una señal igual a 0 voltios y el uno lógico como una señal igual a 5 voltios.</p>
                <p>Los símbolos para reconocer a cada una de las compuertas que identifican a las operaciones descritas en el punto anterior se ilustran a continuación.</p>
            </div>
        </div>
        <br>
        <div id="accordion" class="py-4">
            <!-- 1.5.1 CONVERSIÓN DE DECIMAL A BINARIO -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        4.3.1 COMPUERTA OR
                    </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p>Es un circuito digital que tiene dos o más entradas y cuya salida es igual a la suma OR de las entradas. El símbolo correspondiente a una compuerta OR de dos entradas es el que se puede observar en la Figura 2.5:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/compuerta_or.png" class="w-100 p-4" alt="">
                        <p>En resumen se puede destacar los aspectos más importantes de la operación OR:</p>
                        <ul>
                            <li>La operación OR produce un resultado de 1 cuando cualquiera de las variables de entrada es 1.</li>
                            <li>La operación OR genera un resultado de 0 solamente cuando todas las variables de entrada son 0.</li>
                            <li>En la operación OR, 1+1 = 1; 1+1+1=1; etc.</li>
                        </ul>
                        <p>La función OR también se puede identificar de la siguiente manera:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/bloque_or.png" class="w-100 p-4" alt="">
                    </div>
                </div>
            </div>
            <!-- 1.5.2 CONVERSIÓN DE BINARIO A DECIMAL -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        4.3.2 COMPUERTA AND
                    </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>En la Figura 2.7 se muestra en forma simbólica una compuerta AND de dos entradas, en este caso la salida de la compuerta AND es igual al producto de las entradas lógicas, es decir, X = A.B.</p>
                        <img src="<?= base_url()?>assets/images/circuitos/compuerta_and.png" class="w-100 p-4" alt="">
                        <p>Así como la función OR, ésta también se puede identificar, como se muestra en la Figura 2.8:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/bloque_and.png" class="w-100 p-4" alt="">
                    </div>
                </div>
            </div>
            <!-- 1.5.3 CONVERSIÓN DE DECIMAL A OCTAL -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        4.3.3 COMPUERTA NOT
                    </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p>En la Figura 2.9 se muestra en forma simbólica una compuerta NOT, la cual tiene una sola entrada y una salida. La salida del inversor se encuentra en estado lógico “1” sí y solo sí, la entrada se encuentra en el estado lógico “0”. Esto es, que la salida toma el estado lógico opuesto al de la entrada.</p>
                        <img src="<?= base_url()?>assets/images/circuitos/compuerta_not.png" class="w-100 p-4" alt="">
                        <p>Tal como en los casos anteriores, ésta compuerta también se puede identificar como se muestra en la Figura 2.10:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/bloque_not.png" class="w-100 p-4" alt="">
                        <p>Para las anteriores compuertas se aplica la Tabla de la Verdad correspondiente a cada función, es decir, por ejemplo la función OR corresponde a la compuerta OR.</p>
                        <p>Hay otras compuertas que se derivan de las anteriores, las cuales se explicarán brevemente a continuación.</p>
                    </div>
                </div>
            </div>
            <!-- 1.5.4 CONVERSIÓN DE OCTAL A BINARIO -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        4.3.4 COMPUERTA XOR
                    </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <p>También llamada compuerta OR exclusivo, en la Figura 2.11 se puede observar su representación y su Tabla de la Verdad correspondiente. El símbolo del operador OR exclusivo es la suma de un circuito Θ  y está definido como: a Θ b = ā.b + a.</p>
                        <img src="<?= base_url()?>assets/images/circuitos/compuerta_xor.png" class="w-100 p-4" alt="">
                        <p>La compuerta también se puede identificar de la siguiente manera:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/bloque_xor.png" class="w-100 p-4" alt="">
                    </div>
                </div>
            </div>
            <!-- 1.5.5 CONVERSIÓN DE BINARIO A OCTAL -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        4.3.5 COMPUERTA NAND
                    </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <p>La función u operación de la compuerta le corresponde a:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/nand.png" alt="">
                        <p>De lo anterior se deduce que ésta no es más que la operación AND complementada, su representación se puede observar en la Figura 2.13.</p>
                        <img src="<?= base_url()?>assets/images/circuitos/compuerta_nand.png" class="w-100 p-4" alt="">
                        <p>También se puede representar como se muestra en la Figura 2.14:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/bloque_nand.png" class="w-100 p-4" alt="">
                    </div>
                </div>
            </div>
            <!-- 1.5.6 CONVERSIÓN DE BINARIO A HEXADECIMAL -->
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        4.3.6 COMPUERTA NOR
                    </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <p>Para esta compuerta la función u operación se establece como:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/nor.png" alt="">
                        <img src="<?= base_url()?>assets/images/circuitos/compuerta_nor.png" class="w-100 p-4" alt="">
                        <p>Se puede representar como a continuación se muestra en la Figura 2.16:</p>
                        <img src="<?= base_url()?>assets/images/circuitos/bloque_nor.png" class="w-100 p-4" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/numeracion/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="row mt-2">
        <div class="col-lg-6 text-center">
            <img src="<?= base_url()?>assets/images/logo_tecnm.png" style="height: 130px;" alt="">
        </div>
        <div class="col-lg-6 text-center">
            <img src="<?= base_url()?>assets/images/logo_itt.png" style="height: 130px;" alt="">
        </div>
    </div>
    <div class="container">
        <div class="section-title">
            <h2>CONVERTIDOR DE SISTEMAS NUMERICOS</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-12 text-center">
            <label for="in">De</label>
            <select id="in" class="form-control">
                <option value="D">Decimal</option>
                <option value="B">Binario</option>
                <option value="O">Octal</option>
                <option value="H">Hexadecimal</option>
            </select>
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <label for="baseConvert">Valor</label>
            <input type="text" id="baseConvert" class="form-control">
        </div>
        <div class="col-lg-4 col-sm-12 text-center">
            <label for="out">Convertir a</label>
            <select id="out" class="form-control">
                <option value="D">Decimal</option>
                <option value="B">Binario</option>
                <option value="O">Octal</option>
                <option value="H">Hexadecimal</option>
            </select>
        </div>
        <div class="col-lg-12 pt-2">
            <button id="output" class="btn btn-primary form-control">Convertir</button>
        </div>
        <div class="col-lg-12 pt-2 text-center result-convert">
        </div>
    </div>
    <div id="accordion" class="py-4">
        <!-- 1.5.1 CONVERSIÓN DE DECIMAL A BINARIO -->
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    1.5.1 CONVERSIÓN DE DECIMAL A BINARIO
                </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p>Existen dos maneras de convertir un número decimal a su representación equivalente en el sistema binario. En el primero el número decimal se expresa simplemente como una suma de potencias de 2 y luego los unos y los ceros se escriben en las posiciones adecuadas de bits. Para ilustrar lo anterior, consideremos el siguiente ejemplo: </p>
                    <img src="<?= base_url()?>assets/images/numeracion/decimal_binario.png" class="w-100 p-4" alt="">
                    <p>Observe que se coloca un 0 en las posiciones 2^1 y 2^4, ya que todas las posiciones deben tomarse en cuenta.</p>
                    <p>El segundo método es llamado, Método de las Divisiones Sucesivas entre Dos. Se trata de dividir sucesivamente el número decimal y los sucesivos cocientes entre dos (2), hasta que el cociente en una de las divisiones tome el valor cero (0). La unión de todos los restos obtenidos, escritos en orden inverso, nos proporciona el número inicial expresado en el sistema binario.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/decimal_binario_1.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.2 CONVERSIÓN DE BINARIO A DECIMAL -->
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    1.5.2 CONVERSIÓN DE BINARIO A DECIMAL
                </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <p>El sistema de numeración binario es un sistema posicional donde cada dígito binario (bit) tiene un valor basado en su posición relativa al LSB. Cualquier número binario puede convertirse a su equivalente decimal, simplemente sumando en el número binario los valores de las diversas posiciones que contenga un 1. Para ilustrar lo anterior consideremos el siguiente ejemplo:</p>
                    <img src="<?= base_url()?>assets/images/numeracion/binario_decimal.png" class="w-100 p-4" alt="">
                    <p>Nótese que el procedimiento consiste en determinar los valores (es decir, las potencias de 2) de cada posición de bit que contenga un 1 y luego sumarlos. Nótese también que el MSB tiene un valor de 2^4 a pesar de que es el quinto bit; esto se debe a que el LSB es el primer bit y tiene un valor de 2^0</p>
                </div>
            </div>
        </div>
        <!-- 1.5.3 CONVERSIÓN DE DECIMAL A OCTAL -->
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    1.5.3 CONVERSIÓN DE DECIMAL A OCTAL
                </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <p>Igualmente que en la conversión de decimal a binario, por medio del Método de Divisiones Sucesivas, pero en este caso por ocho (8).</p>
                    <img src="<?= base_url()?>assets/images/numeracion/decimal_octal.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.4 CONVERSIÓN DE OCTAL A BINARIO -->
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    1.5.4 CONVERSIÓN DE OCTAL A BINARIO
                </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    <p>Para convertir un número octal a binario se sustituye cada dígito octal por sus correspondientes tres dígitos binarios.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/octal_binario.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.5 CONVERSIÓN DE BINARIO A OCTAL -->
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    1.5.5 CONVERSIÓN DE BINARIO A OCTAL
                </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                    <p>Para convertir un número binario a octal se realiza un proceso inverso al anterior. Se agrupan los dígitos de 3 en 3 a partir del punto decimal hacia la izquierda y hacia la derecha, sustituyendo cada trío de dígitos binarios por su equivalente dígito octal.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/binario_octal.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.6 CONVERSIÓN DE BINARIO A HEXADECIMAL -->
        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    1.5.6 CONVERSIÓN DE BINARIO A HEXADECIMAL
                </button>
                </h5>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                    <p>Se realiza un proceso inverso al anterior. Se agrupan los dígitos binarios de 4 en 4 a partir del punto decimal hacia la izquierda y hacia la derecha, sustituyendo cada cuarteto por su correspondiente dígito hexadecimal. 
                    <br><br>
                    Agregando ceros cuando sea necesario para completar un grupo de 4 bits.</p>
                </div>
            </div>
        </div>
        <!-- 1.5.7 CONVERSIÓN DE OCTAL A HEXADECIMAL -->
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeve" aria-expanded="true" aria-controls="collapseSeve">
                    1.5.7 CONVERSIÓN DE OCTAL A HEXADECIMAL
                </button>
                </h5>
            </div>
            <div id="collapseSeve" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                    <p>Esta conversión realiza un paso intermedio utilizando el sistema binario. Primero se convierte el número octal en binario y éste se pasa a hexadecimal.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/octal_hexadecimal.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.8 CONVERSIÓN DE HEXADECIMAL A OCTAL -->
        <div class="card">
            <div class="card-header" id="headingEight">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                    1.5.8 CONVERSIÓN DE HEXADECIMAL A OCTAL
                </button>
                </h5>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body">
                    <p>Se realiza un paso intermedio utilizando el sistema binario. Se convierte en binario y éste en octal.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/hexadecimal_octal.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.9 CONVERSIÓN DE DECIMAL A HEXADECIMAL -->
        <div class="card">
            <div class="card-header" id="headingNine">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    1.5.9 CONVERSIÓN DE DECIMAL A HEXADECIMAL
                </button>
                </h5>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body">
                    <p>De igual manera, la conversión de decimal a hexadecimal se puede efectuar por medio de la división repetida por 16.</p>
                    <p>Siguiendo el mismo método utilizado en las conversiones de decimal a binario y de decimal a octal.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/decimal_hexadecimal.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.10 CONVERSIÓN DE HEXADECIMAL A BINARIO -->
        <div class="card">
            <div class="card-header" id="headingTen">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                    1.5.10 CONVERSIÓN DE HEXADECIMAL A BINARIO
                </button>
                </h5>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                <div class="card-body">
                    <p>Se sustituye cada dígito hexadecimal por su representación binaria con cuatro dígitos.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/hexadecimal_binario.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>
        <!-- 1.5.11 CONVERSIÓN DE HEXADECIMAL A DECIMAL -->
        <div class="card">
            <div class="card-header" id="headingEleven">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                    1.5.11 CONVERSIÓN DE HEXADECIMAL A DECIMAL
                </button>
                </h5>
            </div>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                <div class="card-body">
                    <p>Un número hex se puede convertir en su equivalente decimal utilizando el hecho de que cada posición de los dígitos hex tiene un valor que es una potencia de 16. El LSD tiene un valor de 160 = 1; el siguiente dígito en secuencia tiene un valor de 161 = 16; el siguiente tiene un valor de 162 = 256 y así sucesivamente El proceso de conversión se demuestra en los ejemplos que siguen.</p>
                    <img src="<?= base_url()?>assets/images/numeracion/hexadecimal_decimal.png" class="w-100 p-4" alt="">
                </div>
            </div>
        </div>

    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<script type="text/javascript" src="<?= base_url()?>assets/js/numeracion/app.js"></script>
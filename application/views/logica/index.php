<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
        <div class="section-title">
                <h2>Lógica Matemática</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Una sentencia declarativa es una oración que afirma algo. </h3>
                <p>Ejemplos de sentencias declarativas:</p>
                <ul>
                    <li>El curso de Matemáticas Discretas está fácil. </li>
                    <li>El caballo blanco es verde.</li>
                    <li>Si la luna está llena y no llueve, entonces saldré a caminar.</li>
                    <li>El Último Teorema de Fermat es cierto.</li>
                    <li>Esta frase es falsa.</li>
                    <li>x + 3 es impar.</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Lógica proposicional</h3>
                <p>Una proposición es una sentencia declarativa que debe ser verdadera o falsa pero no ambas. </p>
                <p>Ejemplos Son proposiciones: </p>
                <ul>
                    <li>El curso de Matemáticas Discretas está fácil. </li>
                    <li>Si la luna está llena y no llueve, entonces saldré a caminar. </li>
                    <li>El Último Teorema de Fermat es cierto. </li>
                </ul>
                <p>No son proposiciones: </p>
                <ul>
                    <li>Esta frase es falsa </li>
                    <ul>
                        <li>Si la frase es cierta, lo que en ella se dice debe ser cierto, así debe ser falsa.</li>
                        <li>Si la frase es falsa, lo contrario a lo que en ella se afirma es cierto, por consiguiente es cierta. </li>
                    </ul>
                    <li>x + 3 es un número impar </li>
                    <ul>
                        <li>Si x = 2 la afirmación es cierta. </li>
                        <li>Si x = 3 la afirmación es falsa. </li>
                    </ul>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Variables proposicionales</h3>
                <p>En nuestro manejo de proposiciones utilizaremos símbolos para representarlas. Estos símbolos se llamarán variables proposicionales. Así pondremos </p>
                <b><p>p : El curso de Matemáticas Discretas está fácil. </p></b>
                <p>Indicará que la variable proposicional p representa la proposición “El curso de Matemáticas Discretas está fácil.” </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Proposiciones Primitiva y Compuestas</h3>
                <b><p>Una proposición primitiva es una proposición que no se puede descomponer en hechos más simples. </p></b>
                <p>Ejemplos </p>
                <ul>
                    <li>El curso de matemáticas discretas está fácil. </li>
                    <li>El caballo blanco es verde. </li>
                </ul>
                <br>
                <b><p>Una proposición compuesta es una proposición que no es primitiva. </p></b>
                <p>Ejemplos </p>
                <ul>
                    <li>Si la luna está llena y no llueve, salgo a caminar.</li>
                    <li>Yo contraté el cable básico, como tú. </li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Valor de Verdad</h3>
                <p>El valor de verdad de una proposición es una asignación a uno de los dos posibles valores 
                verdadero o falso. Esta asignación dependerá de lo que en la misma proposición se afirme: 
                si es cierto diremos que tiene valor de verdad verdadero y si es falso diremos que tiene 
                valor de verdad falso. </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Operadores Lógicos </h3>
                <b><p>Los operadores lógicos sirven para construir proposiciones complejas.</p></b>
                <ul>
                    <li>Negación: ¬ p (Léase “p negada”) </li>
                    <li>Disjunción: p ∨ q (Léase “ p o q”) </li>
                    <li>Conjunción: p ∧ q (Léase “ p y q”)</li>
                </ul>
                <p>Estos operadores pueden usarse una o varias veces en forma combinada o no para construir proposiciones más complejas, por ejemplo:</p>
                <ul>
                    <li><b><p>p ∨ ( q ∧ ( r ∨ ( ¬ p))) </p></b></li>
                </ul>
                <p>Para reducir el número de paréntesis se conviene en una jerarquía de operadores para indicar el orden de precedencia de uno sobre otro. </p>
                <ul>
                    <li><b><p>Mayor Jeraquía ¬ ∧ ∨ Menor Jerarquía </p></b></li>
                </ul>
                <p>Ante una disputa de operandos gana el que tiene una mayor jerarquía. Así </p>
                <img src="<?= base_url()?>assets/images/logica/expresiones.png" alt="">
                <p>Los paréntesis deben ser utilizados para forzar el orden de las operaciones. </p>
            </div>
        </div>
    </div>
    <div class="row p-3">
        <h3>Archivos</h3>
        <?php if($this->session->userdata('logged_in')['role'] == 1 ){ ?>
            <input class="px-3" type="file" id="uploadFile" data-unit="3" size="40" value="Choose file" accept=".png, .jpg, .jpeg, .gif, .doc, .ppt, .xls, .docx, .pptx, .xlsx, .pdf" multiple="">
        <?php } ?>
    </div>
    <div class="w-100 pb-4" id="filesBox">
        <?php foreach ($files as $key => $f): ?>
            <div class="w-50 d-flex flex-row alig-items-center justify-content-start">
                <?php if($this->session->userdata('logged_in')['role'] == 1 ){ ?>
                    <img class="icon-option removeFile" data-id="<?= $f->ID ?>" data-model="files" src="<?= base_url() ?>assets/bootstrap/icons/trash-fill.svg"/>
                <?php } ?>
                <a target="_blank" href="<?= base_url()?>Files/documentView/<?= $f->FILE_NAME ?>"><?= $f->ORIGINAL_NAME ?></a>
            </div>
        <?php endforeach ?>
    </div>
    <?php if(count($files) == 0){ ?>
        <label class="text-muted m-0 pb-3 zeroFiles" for="">No hay archivos...</label>
    <?php } ?>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/numeracion/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>UNIDAD 1 - SISTEMAS DE NUMERACIÓN</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Un sistema de numeración es el conjunto de símbolos y reglas que se utilizan para la representación de datos numéricos o cantidades. Un sistema de numeración se caracteriza por su base, que es el número de símbolos distintos que utiliza y además es el coeficiente que determina cuál es el valor de cada símbolo dependiendo de la posición que ocupe. </p>
                <p>Los actuales sistemas de numeración son netamente posicionales, en los que el valor relativo que representa cada símbolo o cifra depende de su valor absoluto y de la posición que ocupa dicha cifra con respecto a la coma decimal. La coma decimal (,) que separa la parte entera de la parte fraccionaria, en ambientes informáticos, está representada por el punto decimal (.). </p>
                <p>En este capítulo se estudiarán los sistemas de numeración decimal, binario, octal y hexadecimal, cómo están conformados y las conversiones de un sistema a otro. </p>
                <p>De manera que el sistema binario es el más importante de los sistemas digitales, pero también hay otros que también lo son, por ejemplo, el sistema decimal es el que se utiliza para representar cantidades fuera de un sistema digital y viceversa; hay situaciones donde se deben llevar números decimales a binarios para hacer algún tipo de procesamiento. La computadora debido a su construcción basada en circuitos electrónicos digitales, almacena y maneja la información con el sistema binario. Este el motivo que obliga a transformar internamente todos los datos, a una representación binaria para que la máquina sea capaz de procesarlos. Pero también existen otros dos sistemas con los cuales se pueden realizar aplicaciones en los sistemas digitales; éstos son el sistema octal (Base 8) y el hexadecimal (Base 16), éstos se usan con la finalidad de ofrecer un eficaz medio de representación de números binarios grandes, teniendo la ventaja de poder convertirse fácilmente al y del binario, y ser los más compatibles con éste. </p>
            </div>
        </div>
    </div>
    <div class="row p-3">
        <h3>Archivos</h3>
        <?php if($this->session->userdata('logged_in')['role'] == 1 ){ ?>
            <input class="px-3" type="file" id="uploadFile" data-unit="1" size="40" value="Choose file" accept=".png, .jpg, .jpeg, .gif, .doc, .ppt, .xls, .docx, .pptx, .xlsx, .pdf" multiple="">
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
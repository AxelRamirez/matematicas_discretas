<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
        <div class="section-title">
                <h2>UNIDAD 6 - ÁRBOLES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Un árbol es una estructura no lineal de datos ampliamente usada que imita la forma de un árbol (un conjunto de nodos conectados).</p>
                <p>En ciencias de la computación, un árbol binario es una estructura de datos en la cual cada nodo puede tener un hijo izquierdo y un hijo derecho. No pueden tener más de dos hijos (de ahí el nombre "binario"). Si algún hijo tiene como referencia a null, es decir que no almacena ningún dato, entonces este es llamado un nodo externo.</p>
                <p>En el caso contrario el hijo es llamado un nodo interno. Un árbol binario es un grafo conexo, acíclico y no dirigido tal que el grado de cada vértice no es mayor a 3. De esta forma solo existe un camino entre un par de nodos. Usos comunes de los árboles binarios son los árboles binarios de búsqueda, los montículos binarios y Codificación de Huffman. Los árboles surgen en problemas teóricos como el tiempo óptimo para ordenar.</p>
                <p>Los arboles forman una subclases de gráficas que más se utilizan. La ciencia de la computación hace uso de los arboles ampliamente, especialmente para organizar y relacionar datos en una base de datos.</p>
                <img src="<?= base_url()?>assets/images/arboles/arbol_1.png" alt="">
            </div>
        </div>
    </div>
    <div class="row p-3">
        <h3>Archivos</h3>
        <?php if($this->session->userdata('logged_in')['role'] == 1 ){ ?>
            <input class="px-3" type="file" id="uploadFile" data-unit="6" size="40" value="Choose file" accept=".png, .jpg, .jpeg, .gif, .doc, .ppt, .xls, .docx, .pptx, .xlsx, .pdf" multiple="">
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
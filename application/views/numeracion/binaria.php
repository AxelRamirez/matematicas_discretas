<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/numeracion/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>1.2 SISTEMA DE NUMERACIÓN BINARIA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Este sistema de base 2 es el más sencillo de todos por poseer sólo dos dígitos, fue introducido por Leibniz en el Siglo XVII, es el sistema que internamente utilizan los circuitos digitales que configuran el hardware de las computadoras actuales. </p>
                <p>Los dos dígitos, llamados bits (Contracción de binary digit), son el uno (1) y el cero (0), por lo cual el equivalente decimal se obtendrá al sumar los pesos correspondientes a los bits 1. </p>
                <p>En bit más significativo (MSB) es aquel que se ubica más a la izquierda (el que tiene mayor valor). El bit menos significativo (LSB) es aquel que está más a la derecha y que tiene el menor valor. </p>
                <p>Para la medida de unidades de información representada en binario, se utilizan una serie de múltiplos de bit que poseen nombre propio: </p>
                <ul>
                    <li>Nibble o Cuarteto: Es el conjunto de cuatro bits (1001). </li>
                    <li>Byte u Octeto: Es el conjunto de ocho bits (10101010). </li>
                    <li>Kilobyte (Kb): Es el conjunto de 2^10 bits (1.024 * 8 bits) </li>
                    <li>Megabyte (Mb): Es el conjunto de 2^20 Kilobytes bits (1.024* 8 bits) </li>
                    <li>Gigabyte (Gb): Es el conjunto de 2^30 Megabytes bits (1.024* 8 bits) </li>
                    <li>Terabyte (Tb): Es el conjunto de 2^40 Gigabytes bits (1.024* 8 bits) </li>
                </ul>
                <p>La razón por la que se utiliza el factor 1.024 en vez de 1.000, es por ser el múltiplo de 2 más próximo a 1000, cuestión importante desde el punto de vista informático (2^10= 1.024). </p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
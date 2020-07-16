<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>6.5 RECORRIDO DE UN ÁRBOL</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p><b>Pre orden:</b> (raíz, izquierdo, derecho).</p>
                <p>Para recorrer un árbol binario no vacío en preorden, hay que realizar las siguientes operaciones recursivamente en cada nodo, comenzando con el nodo de raíz:</p>
                <ol>
                    <li>Visite la raíz</li>
                    <li>Atraviese el sub-árbol izquierdo</li>
                    <li>Atraviese el sub-árbol derecho</li>
                </ol>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><b>Inorden:</b> (izquierdo, raíz, derecho).</p>
                <p>Para recorrer un árbol binario no vacío en inorden (simétrico), hay que realizar las siguientes operaciones recursivamente en cada nodo:</p>
                <ol>
                    <li>Atraviese el sub-árbol izquierdo</li>
                    <li>Visite la raíz</li>
                    <li>Atraviese el sub-árbol derecho</li>
                </ol>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><b>Postorden:</b> (izquierdo, derecho, raíz).</p>
                <p>Para recorrer un árbol binario no vacío en postorden, hay que realizar las siguientes operaciones recursivamente en cada nodo:</p>
                <ol>
                    <li>Atraviese el sub-árbol izquierdo</li>
                    <li>Atraviese el sub-árbol derecho</li>
                    <li>Visite la raíz</li>
                </ol>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p>En general, la diferencia entre pre orden, inorden y postorden es cuándo se recorre la raíz. En los tres, se recorre primero el sub-árbol izquierdo y luego el derecho.</p>
                <ul>
                    <li>En pre orden, la raíz se recorre antes que los recorridos de los subárboles izquierdo y derecho</li>
                    <li>En inorden, la raíz se recorre entre los recorridos de los árboles izquierdo y derecho, y</li>
                    <li>En postorden, la raíz se recorre después de los recorridos por el subárbol izquierdo y el derecho</li>
                </ul>
                <img src="<?= base_url()?>assets/images/arboles/arbol_5.jpg" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
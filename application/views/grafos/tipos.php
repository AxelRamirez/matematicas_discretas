<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/grafos/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
        <div class="section-title">
                <h2>5.2 TIPOS DE GRAFOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo</h3>
                <p>Un grafo es un conjunto de vértice o nodos unidos por aristas o arcos.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo no dirigido</h3>
                <p>Son aquellos grafos en los cuales los lados no están orientados (no son flechas). Cada lado se representa entre paréntesis, separando sus vértices por comas.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_nodirigido.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo dirigido</h3>
                <p>Un grafo dirigido G, también llamado “dígrafo o digrafo”, es aquel que tiene uniones unidireccionales que suelen dibujarse con una flecha.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_dirigido.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo acíclico</h3>
                <p>Es aquel grafo no contiene ningún ciclo simple.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_aciclico.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo cíclico</h3>
                <p>Un grafo se dice cíclico si contiene algún ciclo simple.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_ciclico.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo bipartito</h3>
                <p>Un grafo bipartito es cualquier grafo, cuyos vértices pueden ser divididos en dos conjuntos, tal que no haya aristas entre los vértices del mismo conjunto. Se ve que un grafo es bipartito si no hay ciclos de longitud impar.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_bipartito.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo completo</h3>
                <p>Un grafo es completo si cada vértice tiene un grado igual a n-1, donde n es el número de vértice que compone el grafo. Además es un grafo simple en el que cada vértice es adyacente a cualquier todo otro vértice.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_completo.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo conexo</h3>
                <p>Decimos que es un grafo conexo, si es posible formar un camino desde cualquier vértice a cualquier otro en el grafo.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_conexo.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo denso</h3>
                <p>Un grafo denso es aquel grafo en el que el número de aristas está cercano al número de máximo de aristas.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_denso.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo nulo</h3>
                <p>El grafo nulo es el grafo cuyos conjuntos de aristas y de vértices son vacíos.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_nulo.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo plano</h3>
                <p>Un grafo plano es uno que es posible dibujar en el plano sin que ningún par de aristas se crucen entre sí.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_plano.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo ponderado</h3>
                <p>Un grafo ponderado es aquel que asocia un valor o peso a cada arista en el grafo. El peso de un camino en un grafo con pesos es la suma de los pesos de todas las aristas atravesadas.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_ponderado.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo regular</h3>
                <p>Un grafo regular es un grafo cuyos vértices tienen el mismo grado.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_regular.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo simple</h3>
                <p>Un grafo simple es un grafo o dígrafo que no tiene bucles, y que no es un multígrafo.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_simple.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo no simple</h3>
                <p>Grafo no  dirigido que tiene lados paralelos y lazos. </p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_nosimple.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo trivial</h3>
                <p>Un grafo trivial es aquel grafo vacío con un único vértice.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_trivial.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grafo vacío</h3>
                <p>Un grafo vacío es el grafo cuyo conjunto de aristas es vacío.</p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_vacio.png" alt=""/>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
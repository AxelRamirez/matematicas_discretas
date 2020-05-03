<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/grafos/banner.jpg" alt="Insituto Tecnologico de Tijuana">
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
                <h2>5.1 COMPONENTES DE UN GRAFO</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Vértice</h3>
                <p>Son puntos o nodos con los que están conformado los grafos. Llamaremos grado de un vértice, al número de aristas de las que es extremo. Se le dice vértice “par” o “impar” según sea su grado.</p>
                <img src="<?= base_url()?>assets/images/grafos/vertice.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Aristas</h3>
                <p>Una arista es  una relación entre dos vértices de un grafo.</p>
                <img src="<?= base_url()?>assets/images/grafos/aristas.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Aristas Adyacentes</h3>
                <p>Estas son dos aristas que se dirigen en al mismo vértice y se juntan en él. </p>
                <img src="<?= base_url()?>assets/images/grafos/arista_adyacente.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Aristas Paralelas</h3>
                <p>Estas son dos aristas si el vértice inicial y el final son uno mismo. </p>
                <img src="<?= base_url()?>assets/images/grafos/aristas_paralelas.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Cruce</h3>
                <p>Son dos aristas que cruzan en un punto. </p>
                <img src="<?= base_url()?>assets/images/grafos/cruce.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Grado o Valencia de un Vértice</h3>
                <p>Es el número de aristas que inciden sobre un vértice. </p>
                <img src="<?= base_url()?>assets/images/grafos/grado.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Lazo</h3>
                <p>Es una arista cuales extremos inciden sobre el mismo vértice. </p>
                <img src="<?= base_url()?>assets/images/grafos/lazo.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Vértice Adyacente</h3>
                <p>Los vértices son adyacentes si están unidos mediante una arista. </p>
                <img src="<?= base_url()?>assets/images/grafos/vertice_adyancente.png" alt=""/>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Vértice Aislado:</h3>
                <p>Es un vértice de grado cero. </p>
                <img src="<?= base_url()?>assets/images/grafos/vertice_aislado.png" alt=""/>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
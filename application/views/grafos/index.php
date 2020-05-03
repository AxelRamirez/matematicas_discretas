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
                <h2>INTRODUCCIÓN A LOS GRAFOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>La teoría de grafos es un tema muy antiguo; sin embargo, es utilizado en muchas aplicaciones modernas. Sus ideas básicas fueron introducidas en el siglo XVIII por el matemático suizo Leonhard Euler.</p>
                <p>Los grafos son usados para resolver problemas en muchos campos, por ejemplo, se puede utilizar para diferenciar dos compuestos químicos con la misma fórmula molecular pero empleando distintas estructuras; para el caso de nuestra área de interés, un ejemplo es que los grafos pueden ser utilizados para establecer si dos computadoras están conectadas por un enlace de comunicaciones entre las de redes de computadoras.</p>
                <br>
                <h3>Grafos</h3>
                <p>Los grafos son estructuras discretas ordenadas donde son conjuntos de vértices o nodos conectados por arcos. Existen diferentes  tipos de grafos que difieren respecto al número y tipo de arcos que pueden enlazar un par de vértices. En las diferentes áreas de  estudio existen algunas dificultades que pueden  ser solucionadas  utilizando los modelos de grafos.</p>
                <p>Los grafos con pesos asignados a sus arcos pueden emplearse para solucionar  problemas, por ejemplo hallar el camino más corto entre dos puntos en una red de transporte, o bien  para programar exámenes y asignar canales a las estaciones de televisión.</p>
                <p>Los grafos son  una herramienta importante, y muy útil, empleada en el área de las computadoras, principalmente para modelar las redes. Una red es construida con líneas telefónicas y, por supuesto, por computadoras. En la siguiente ilustración se muestra la ubicación de cada computadora como un punto y cada línea telefónica con un arco: </p>
                <img src="<?= base_url()?>assets/images/grafos/grafo_1.jpg" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
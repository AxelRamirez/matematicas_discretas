<?php $this->load->view('navbar');?>
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/graph.css">
<!-- <script src="<?= base_url()?>assets/js/graph/cb=gapi.loaded_1" async=""></script>
<script src="<?= base_url()?>assets/js/graph/cb=gapi.loaded_0" async=""></script> -->
<script type="text/javascript" async="" src="<?= base_url()?>assets/js/graph/plusone.js"></script>
<script type="text/javascript" async="" src="<?= base_url()?>assets/js/graph/ga.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/graph/html5slider.js"></script> 
<script type="text/javascript" src="<?= base_url()?>assets/js/graph/Point.js"></script> 
<script type="text/javascript" src="<?= base_url()?>assets/js/graph/Vertex.js"></script> 
<script type="text/javascript" src="<?= base_url()?>assets/js/graph/Grapher2D.js"></script> 
<script type="text/javascript" src="<?= base_url()?>assets/js/graph/Graph.js"></script> 
<script type="text/javascript" src="<?= base_url()?>assets/js/graph/Controller.js"></script>
<script type="text/javascript">	
    function go(e)
    {
        var grapher = new Controller("svgc");
    }
</script>
<body class="p-4" onload="go()">
    <main>
    <div class="p-3 mt-2">
        <div class="container">
        <div class="section-title">
                <h2>GENERADOR DE GRAFOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <svg id="svgc" style="width:100%; height:30em;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" id="inPanel">
                <input value="3:1-2,2-3,3-1" type="text" id="inText" class="form-control w-100">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <input value="Dibujar" type="submit" onclick="rebuildURL();" class="btn btn-danger w-100" style="font-size:1.2em;">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex align-items-center">
                <input type="checkbox" id="phCHK" checked="yes">
                <label class="m-0 px-2" for="phCHK">2D</label>
                <br>
                <input type="checkbox" id="tdCHK">
                <label class="m-0 px-2" for="tdCHK">3D</label>
                <br>
                <input type="checkbox" id="lbCHK">
                <label class="m-0 px-2" for="lbCHK">Numeración</label>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 pt-3">
                <h3>Controles</h3>
                <span>Repulsion</span>
                <input type="range" id="rRNG" min="1" max="100" value="30" style="width:100%">
                <span>Atracción</span>
                <input type="range" id="aRNG" min="1" max="100" value="50" style="width:100%">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div id="graphs">
                    <a href="<?= base_url()?>Grafos/herramienta#2:1-2">Palo</a>
                    <a href="<?= base_url()?>Grafos/herramienta#3:1-2,2-3,3-1">Triangulo</a>
                    <a href="<?= base_url()?>Grafos/herramienta#8:1-2,2-3,3-4,4-5,5-6,6-7,7-8,8-1">Octagono</a>
                    <a href="<?= base_url()?>Grafos/herramienta#4:1-2,2-3,3-1,1-4,2-4,3-4">Tetraedro</a>
                    <a href="<?= base_url()?>Grafos/herramienta#8:1-2,2-3,3-4,4-1,5-6,6-7,7-8,8-5,1-5,2-6,3-7,4-8">Cubo</a>
                    <a href="<?= base_url()?>Grafos/herramienta#6:1-2,2-3,3-4,4-1,1-5,2-5,3-5,4-5,1-6,2-6,3-6,4-6">Octaedro</a>
                    <a href="<?= base_url()?>Grafos/herramienta#12:1-2,2-3,3-4,4-5,5-1,6-7,7-8,8-9,9-10,10-6,1-11,2-11,3-11,4-11,5-11,6-12,7-12,8-12,9-12,10-12,1-6,6-2,2-7,7-3,3-8,8-4,4-9,9-5,5-10,10-1">Icosaedro</a>
                    <a href="<?= base_url()?>Grafos/herramienta#20:1-2,2-3,3-4,4-5,5-1,6-7,7-8,8-9,9-10,10-6,1-11,2-12,3-13,4-14,5-15,6-16,7-17,8-18,9-19,10-20,11-16,16-12,12-17,17-13,13-18,18-14,14-19,19-15,15-20,20-11">Dodecaedro</a>
                    <a href="<?= base_url()?>Grafos/herramienta#24:1-2,2-3,3-4,4-5,5-6,6-7,7-8,8-1,1-9,2-10,3-10,4-11,5-11,6-12,7-12,8-9,9-10,10-11,11-12,12-9,1-13,2-14,3-15,4-16,5-17,6-18,7-19,8-20,13-14,14-15,15-16,16-17,17-18,18-19,19-20,20-13,13-21,14-22,15-22,16-23,17-23,18-24,19-24,20-21,21-22,22-23,23-24,24-21">Rombicuboctaedro</a>
                    <a href="<?= base_url()?>Grafos/herramienta#11:1-2,2-3,3-4,4-5,5-1,6-7,7-8,8-9,9-10,10-6,11-1,11-2,11-3,11-4,11-5,11-6,11-7,11-8,11-9,11-10">Diabolo</a>
                    <a href="<?= base_url()?>Grafos/herramienta#7:1-2,2-3,3-4,4-5,5-6,6-1,1-7,2-7,3-7,4-7,5-7,6-7,2-4,4-6,6-2">Avión</a>
                    <a href="<?= base_url()?>Grafos/herramienta#16:1-2,2-3,3-4,4-1,5-6,6-7,7-8,8-5,1-5,2-6,3-7,4-8,9-10,10-11,11-12,12-9,13-14,14-15,15-16,16-13,9-13,10-14,11-15,12-16,1-9,2-10,3-11,4-12,5-13,6-14,7-15,8-16">Cubo 4D</a>
                    <a href="<?= base_url()?>Grafos/herramienta#18:1-2,2-3,3-4,4-5,5-6,6-1,1-7,7-2,2-8,8-3,3-9,9-4,4-10,10-5,5-11,11-6,6-12,12-1,7-8,8-9,9-10,10-11,11-12,12-7,13-14,14-15,15-16,16-17,17-18,18-13,1-13,13-2,2-14,14-3,3-15,15-4,4-16,16-5,5-17,17-6,6-18,18-1">Tambor</a>
                    <a href="<?= base_url()?>Grafos/herramienta#12:1-2,2-3,3-4,4-5,5-6,6-1,1-7,2-8,3-9,4-10,5-11,6-12">Benceno</a>
                    <a href="<?= base_url()?>Grafos/herramienta#18:1-2,2-3,3-4,4-5,5-6,6-1,1-7,2-8,3-9,4-10,5-11,6-12,1-13,2-14,3-15,4-16,5-17,6-18">Ciclohexano</a>
                    <a href="<?= base_url()?>Grafos/herramienta#5:1-2,1-3,1-4,1-5">Metano</a>
                    <a href="<?= base_url()?>Grafos/herramienta#60:1-2,2-3,3-4,4-5,5-6,6-1,6-7,7-8,8-9,9-10,10-5,10-11,11-12,12-4,1-13,13-14,14-7,3-15,15-16,16-17,17-2,9-18,18-19,19-20,20-8,17-21,21-22,22-13,23-15,23-24,24-12,20-25,25-26,26-14,26-27,27-28,28-22,18-29,29-30,30-11,30-31,31-32,32-24,31-33,33-34,34-29,34-35,35-36,36-19,36-37,37-38,38-25,38-39,39-27,21-40,40-41,41-28,41-42,42-43,43-39,43-44,44-45,45-37,16-46,46-47,47-40,42-48,48-49,49-47,46-50,50-51,51-23,51-52,52-32,44-53,53-48,49-54,54-50,54-55,55-56,56-52,58-55,33-60,56-60,58-53,60-57,57-59,59-35,57-58,59-45">Fulleren C<sub>60</sub></a>
                    <a href="<?= base_url()?>Grafos/herramienta#16:1-2,2-3,4-5,5-6,7-8,8-9,1-4,4-7,2-5,5-8,3-6,6-9,3-10,6-11,9-12,9-14,8-15,7-16,10-11,11-12,12-13,13-14,14-15,15-16">Cuadrícula 4x4</a>
                    <a href="<?= base_url()?>Grafos/herramienta#64:1-2,1-5,1-17,2-3,2-6,2-18,3-4,3-7,3-19,4-8,4-20,5-6,5-9,5-21,6-7,6-10,6-22,7-8,7-11,7-23,8-12,8-24,9-10,9-13,9-25,10-11,10-14,10-26,11-12,11-15,11-27,12-16,12-28,13-14,13-29,14-15,14-30,15-16,15-31,16-32,17-18,17-21,17-33,18-19,18-22,18-34,19-20,19-23,19-35,20-24,20-36,21-22,21-25,21-37,22-23,22-26,22-38,23-24,23-27,23-39,24-28,24-40,25-26,25-29,25-41,26-27,26-30,26-42,27-28,27-31,27-43,28-32,28-44,29-30,29-45,30-31,30-46,31-32,31-47,32-48,33-34,33-37,33-49,34-35,34-38,34-50,35-36,35-39,35-51,36-40,36-52,37-38,37-41,37-53,38-39,38-42,38-54,39-40,39-43,39-55,40-44,40-56,41-42,41-45,41-57,42-43,42-46,42-58,43-44,43-47,43-59,44-48,44-60,45-46,45-61,46-47,46-62,47-48,47-63,48-64,49-50,49-53,50-51,50-54,51-52,51-55,52-56,53-54,53-57,54-55,54-58,55-56,55-59,56-60,57-58,57-61,58-59,58-62,59-60,59-63,60-64,61-62,62-63,63-64">Cuadrícula 4x4x4</a>
                    <a href="<?= base_url()?>Grafos/herramienta#10:1-3,3-5,5-2,2-4,4-1,6-10,6-7,7-8,8-9,9-10,1-6,2-7,3-8,4-9,5-10">Gráfico de Petersen</a>
                    <a href="<?= base_url()?>Grafos/herramienta#14:1-2,2-3,3-4,4-5,5-6,6-7,7-8,8-9,9-10,10-11,11-12,12-13,13-14,14-1,1-6,3-8,5-10,7-12,9-14,11-2,13-4">Gráfico de Heawood</a>
                    <a href="<?= base_url()?>Grafos/herramienta#8:1-2,1-3,1-4,1-5,5-4,4-3,3-2,3-6,4-6,1-7,4-7,3-7,2-7,5-7,6-7,3-8,4-8,1-8">Tetraedro puntiagudo</a>
                    <a href="<?= base_url()?>Grafos/herramienta#6:1-4,1-5,1-6,2-4,2-5,2-6,3-4,3-5,3-6">K<sub>3,3</sub></a>
                    <a href="<?= base_url()?>Grafos/herramienta#5:1-2,1-3,1-4,1-5,2-3,2-4,2-5,3-4,3-5,4-5">K<sub>5</sub></a>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
        <div class="section-title">
                <h2>6.3 CLASIFICACIÓN ARBOLES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Clasificación</th>
                        <th>Caracteristica</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Altura</td>
                            <td>El nivel más grande.</td>
                        </tr>
                        <tr>
                            <td>Raíz</td>
                            <td>Que no tiene padre (inicial).</td>
                        </tr>
                        <tr>
                            <td>Padre</td>
                            <td>Que tiene hijo(s).</td>
                        </tr>
                        <tr>
                            <td>Hoja</td>
                            <td>No tiene hijo(s), tiene padre.</td>
                        </tr>
                        <tr>
                            <td>Conjunto de árboles</td>
                            <td>Bosque.</td>
                        </tr>
                        <tr>
                            <td>n-árbol</td>
                            <td>Cuando cada padre tiene a lo más n hijos.</td>
                        </tr>
                        <tr>
                            <td>Árbol binario</td>
                            <td>Cada padre tiene a lo más 2 hijos.</td>
                        </tr>
                        <tr>
                            <td>Altura de un nodo</td>
                            <td>Es la longitud del camino más largo desde el nodo hasta una hoja que sea descendiente de este nodo.</td>
                        </tr>
                        <tr>
                            <td>Altura de un árbol</td>
                            <td>Altura del nodo raíz.</td>
                        </tr>
                    </tbody>
                </table>
                <p><b>Para poder realizar búsquedas eficientes en árboles se manejan dos características: Los árboles pueden estar balanceados por altura o por peso.</b></p>
                <table class="table table-bordered">
                    <thead>
                        <th>Clasificación</th>
                        <th>Caracteristica</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Árbol balanceado por altura</td>
                            <td>En dónde todos los hijos o nodos hoja se intentan mantener a la misma distancia de la raíz.</td>
                        </tr>
                        <tr>
                            <td>Árbol balanceado por peso</td>
                            <td>En dónde los nodos más visitados o utilizados se mantienen a poca distancia dela raíz.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
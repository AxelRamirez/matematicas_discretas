<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
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
                <h2>6.4 ARBOLES CON PESO</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Dado un grafo conexo, un árbol recubierto mínimo de ese grafo es un subgrafo que tiene que ser un árbol y contener todos los vértices del grafo inicial. Cada arista tiene asignado un peso proporcional entre ellos, que es un número representativo de algún objeto, distancia, etc... , y se usa para asignar un peso total al árbol recubierto mínimo computando la suma de todos los pesos de las aristas del árbol en cuestión. Un árbol recubridor mínimo o un árbol expandido mínimo es un árbol recubridor que pesa menos o igual que otros árboles recubridores.</p>
                <p>Todo grafo tiene un bosque recubridor mínimo. En el caso de un empate, porque podría haber más de un árbol recubridor mínimo; en particular, si todos los pesos son iguales, todo árbol recubridor será mínimo. De todas formas, si cada arista tiene un peso distinto existirá sólo un árbol recubridor mínimo.</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><b>Ejemplo:</b> ¿Cual es el peso de este árbol?</p>
                <img src="<?= base_url()?>assets/images/arboles/arbol_4.png" alt="">
                <p class="pt-4"><b>Peso total del grafo = 19</b></p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
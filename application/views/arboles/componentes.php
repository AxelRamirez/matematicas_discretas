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
                <h2>6.1 COMPONENTES DE UN ÁRBOL</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <li><b>Altura:</b> Es el máximo número de niveles de todos los nodos del árbol. Equivale al nivel más alto de los nodos más 1. También podemos hablar de altura de ramas, el máximo número de nodos que hay que recorrer para llegar de la raíz a una de las hojas.</li>
                    <li><b>Ancestros:</b> los padres y los abuelos de un nodo hijo.</li>
                    <li><b>Descendientes:</b> Hijos de los hijos.</li>
                    <li><b>Grado del Árbol:</b> Es el máximo grado de todos los nodos del árbol.</li>
                    <li><b>Grado:</b> El número de hijos que tiene el elemento con más hijos dentro del árbol. En el árbol del ejemplo, el grado es tres, ya que tanto A como D tienen tres hijos, y no existen elementos con más de tres hijos. También es el número de descendientes directos de un determinado nodo.</li>
                    <li><b>Hermano:</b> Dos nodos serán hermanos si son descendientes directos de un mismo nodo. En cuanto a la posición dentro del árbol.</li>
                    <li><b>Longitud de Camino:</b> Es el número de arcos que deben ser recorridos para llegar desde la raíz al nodo X. Por definición la raíz tiene longitud de camino 1, y sus descendientes directos longitud de camino 2 y así sucesivamente.</li>
                    <li><b>Nivel:</b> Es el número de arcos que deben ser recorridos para llegar a un determinado nodo. Por definición la raíz tiene nivel 1. Se define para cada elemento del árbol como la distancia a la raíz, medida en nodos</li>
                    <li><b>Nodo Hermano:</b> Dos nodos serán hermanos si son descendientes directos de un mismo nodo.</li>
                    <li><b>Nodo Hijo:</b> Cualquiera de lo nodo apuntado por uno de lo nodo del árbol. Un nodo puede tener varios hijos. X es hijo de Y, sí y solo sí el nodo X es apuntado por Y. También se dice que X es descendiente directo de Y.</li>
                    <li><b>Nodo Hoja:</b> Nodo que no tiene hijos. Se llama hoja o terminal a aquellos nodos que no tienen ramificaciones (hijos).</li>
                    <li><b>Nodo Interior:</b> Es un nodo que no es raíz ni hoja.</li>
                    <li><b>Nodo Padre:</b> X es padre de Y sí y solo sí el nodo X apunta a Y. También se dice que X es antecesor de Y.</li>
                    <li><b>Nodo Raíz:</b> Es el único nodo del árbol que no tiene padre es decir no es hijo de ningún elemento. Este es el nodo que usaremos para referirnos al árbol.</li>
                    <li><b>Nodo:</b> Son los Vértices o elementos del Árbol.</li>
                    <li><b>Orden:</b> Es el número potencial de hijos que puede tener cada elemento de árbol. De este modo, diremos que un árbol en el que cada nodo puede apuntar a otros dos es de orden dos, si puede apuntar a tres será de orden tres, etc. Podríamos decir que nuestro árbol de ejemplo es de orden tres.</li>
                    <li><b>Peso:</b> Es el número de nodos del árbol sin contar la raíz.</li>
                    <li><b>Rama:</b> Es el camino desde el nodo raíz a una hoja.</li>
                </ul>
                <img src="<?= base_url()?>assets/images/arboles/arboles_2.png" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
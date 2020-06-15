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
                <h2>6.6 ALGORITMOS DE RECORRIDO Y BÚSQUEDA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Algoritmos de recorrido y búsqueda </h3>
                <p><b>El camino más corto</b></p>
                <p>También conocido como los problemas de los caminos cortos entre dos nodos.</p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><b>Algoritmo de Floyd-Warshall</b></p>
                <p>En informática, el algoritmo de Floyd-Warshall, descrito en 1959 por Bernard Roy, es un algoritmo de análisis sobre grafos para encontrar el camino mínimo entre grafos. El algoritmo encuentra el camino entre todos los pares de vértices en una única ejecución.</p>
                <ul>
                    <li>Permite calcular la distancia mínima entre 2 puntos de 1 grafo.</li>
                    <li>Cada nodo se representa por: n/A</li>
                </ul>
                <p>Pasos</p>
                <ul>
                    <li>Asignar el valor 0 al nodo origen.</li>
                    <li>Mediante un proceso iterativo se le asignará a cada nodo Xi un valor n igual a la longitud del camino más corto que exista desde el nodo origen al nodo Xj.</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><b>Algoritmo Dijkstra</b></p>
                <p>El algoritmo de Dijkstra, también llamado algoritmo de caminos mínimos, es un algoritmo para la determinación del camino más corto dado un vértice origen al resto de vértices en un grafo con pesos en cada arista. Su nombre se refiere a Edsger Dijkstra, quien lo describió por primera vez en 1959.</p>
                <ol>
                    <li>Dado un V0, Dijkstra busca un conjunto D con:
                        <ul>
                            <li>Las menores distancias de V0 al resto de vértices</li>
                        </ul>
                    </li>
                    <li>Al inicio solo conocemos:
                        <ul>
                            <li>Las distancias de los adyacentes</li>
                            <li>D es inicializada a </li>
                            <li>Factor de peso para los adyacentes, Infinito ∞ para los no adyacentes</li>
                        </ul>
                    </li>
                    <li>D va a ser mejorado sucesivamente
                        <ul>
                            <li>Escogiendo el vértice Vk no elegido antes</li>
                            <li>Que tenga la distancia mas corta V0, Vk</li>
                            <li>Probamos si pasando por Vk</li>
                            <li>Se puede obtener distancias mas cortas de las que tenemos</li>
                            <li>Para cada Vértice restante del grafo</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><b>A lo ancho</b></p>
                <p>La búsqueda en anchura es otro procedimiento para visitar sistemáticamente todos los vértices de un grafo. Es adecuado especialmente para resolver problemas de optimización, en los que se deba elegir la mejor solución entre varias posibles.</p>
                <p>​ Búsqueda en anchura: Es equivalente a recorrer un árbol por niveles. Dado un nodo v, se visitan primero todos los nodos adyacentes a v, luego todos los que están a distancia 2 (y no visitados), a distancia 3, y así sucesivamente hasta recorrer todos los nodos.</p>
                <p>El recorrido en anchura, generalización del recorrido por niveles de un árbol. Explora sistemáticamente las aristas del grafo de forma que primero se visitan los vértices más “cercanos” al que estamos explorando.</p>
                <p>Consta de tres elementos:</p>
                <ul>
                    <li>Contador (n).</li>
                    <li>Vector de naturales (R) para “marcar” los vértices ya visitados y almacenar el orden de recorrido.</li>
                    <li>Cola (Q) para gestionar los vértices no visitados.</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <p><b>En profundidad</b></p>
                <p>El algoritmo de recorrido en profundidad o DFS, explora sistemáticamente las ramas o aristas del grafo de manera que primero se visitan los nodos o vértices adyacentes a los visitados más recientemente. De esta forma se va "profundizando" en el grafo, es decir, alejándose progresivamente del nodo inicial.</p>
                <p><b>Búsqueda en Profundidad</b></p>
                <ol>
                    <li>Se comienza en el vértice inicial (vértice con índice 1) que se marca como vértice activo.</li>
                    <li>Hasta que todos los vértices hayan sido visitados, en cada paso se avanza al vecino con el menor índice siempre que se pueda, pasando este a ser el vértice activo.</li>
                    <li>Cuando todos los vecinos al vértice activo hayan sido visitados, se retrocede al vértice X desde el que se alcanzó el vértice activo y se prosigue siendo ahora X el vértice activo.</li>
                </ol>
                <p>Es equivalente a un recorrido en preorden de un árbol. Se elige un nodo v de partida. Se marca como visitado y se recorren los nodos no visitados adyacentes a v, usando recursivamente la búsqueda primero en profundidad.El recorrido puede ser para grafos dirigidos o no dirigidos.</p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
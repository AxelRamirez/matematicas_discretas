<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/grafos/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>5.3 REPRESENTACIÓN DE LOS GRAFOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Existen diferentes formas de representar un grafo, y hay muchos métodos para almacenarlos en una computadora. La estructura de datos usada dependerá de las características del grafo, y el algoritmo usado para manipularlo. Entre las más comunes esta las listas y matrices, con frecuencia se usa una combinación de ambas.</p>
                <b><p>Estructura de lista</p></b>
                <ul>
                    <li><b>Lista de incidencia:</b> El grafo está representado por una matriz de A (aristas) por V (vértices), donde [arista, vértice] contiene la información de la arista (conectado o no conectado).</li>
                    <li><b>Lista de adyacencia:</b> El grafo está representado por un arreglo de listas de adyacencia. Para un vértice i, la lista de adyacencia está formada por todos los vértices adyacentes a i. Puede construirse en tiempo lineal, y las inserciones pueden hacerse al principio de cada lista, con lo que se asegura tiempo constante.</li>
                    <li><b>Lista de grados:</b> También llamada secuencia de grados o sucesión gráfica de un una secuencia de números, que corresponde a los grados de los vértices del grafo.</li>
                </ul>
                <b><p>Estructuras matriciales</p></b>
                <ul>
                    <li><b>Matriz de adyacencia:</b> El grafo está representado por una matriz cuadrada M de tamaño n^2, donde n es el número de vértices. Si hay una arista entre un vértice x y un vértice y, entonces el elemento m_ {x, y} es 1, de lo contrario, es 0.</li>
                    <li><b>Matriz de incidencia:</b> El grafo está representado por una matriz de A (aristas) por V (vértices), donde [vértice, arista] contiene la información de la arista (1 - conectado, 0 - no conectado)</li>
                </ul>
                <br>
                <img class="w-100" src="<?= base_url()?>assets/images/grafos/representacion.png" alt="">
            </div>
        </div>
        <br>
        <div id="accordion" class="py-4">
            <!-- 1.5.1 CONVERSIÓN DE DECIMAL A BINARIO -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        5.3.1 REPRESENTACIÓN MATEMÁTICA DE LOS GRAFOS
                    </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p>Por medio de la teoría de los grafos podemos resolver diversos problemas, como la síntesis para circuitos secuenciales, contadores, o sistemas de apertura. Se utiliza en diferentes áreas por ejemplo, en las áreas de Sistemas y Computación, en áreas de ingeniería. También por medio de ellas podemos responder preguntas tales como, ¿Qué tarea debo hacer primero?, ¿Qué tiempo es más corto?, ¿Cuál es el más barato?, y así podemos obtener caminos óptimos para las soluciones aplicando diversos algoritmos como puede ser el algoritmo de Floyd.</p>
                        <p>Un grafo <b>G</b> es un par <b>(V,E)</b> donde:</p>
                        <ul>
                            <li>V ={v1,…,vn} es un conjunto de vértices</li>
                            <li>E = {e1,…,em} es un conjunto de aristas</li>
                            <li>Con cada ek Î {vi, vj}, con vi, vj Î V, vi ≠ vj</li>
                        </ul>
                        <p>Los vértices se representan como puntos y las aristas como líneas entre vértices.</p>
                        <p>Ejemplo:</p>
                        <ul>
                            <li>G = (V,E)</li>
                            <li>V = {a,b,c,d }</li>
                            <li>E = {{a,b}, {b,c}, {a,c}, {a,d}, {d,b} }</li>
                        </ul>
                        <img src="<?=base_url()?>assets/images/grafos/representacion_matematica.png" alt="">
                    </div>
                </div>
            </div>
            <!-- 1.5.2 CONVERSIÓN DE BINARIO A DECIMAL -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        5.3.2 REPRESENTACIÓN COMPUTACIONAL DE LOS GRAFOS
                    </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>Representación mediante matrices: La forma más fácil de guardar datos en nodos es mediante la utilización de un vector que indique los nodos, de manera que aristas entre los nodos se puedan ver como relaciones entre los índices.</p>
                        <b><p>Sintaxis</p></b>
                        <p>Tipo_de_variable[ ][ ]… [ ] Nombre_del_array = new Tipo_de_variable[dimensión1][dimensión2]…[dimensiónN];</p>
                        <p>Arreglos Unidimensionales: Es un arreglo que solo posee una dimensión, está formado por un conjunto de elementos del mismo tipo de datos que almacenan bajo un nombre y se diferencia por la posición de cada uno en el arreglo que inicia desde el 0.Estos pueden ser de 1 hasta n veces, donde n es un número de elementos del arreglo.</p>
                        <b><p>Sintaxis</p></b>
                        <p>TipoDato nombre[] = new TipoDato[Total de elementos];</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" id="WolframAlphaScript9970db3fa4b48d6aba3f3500b25f452f" src="//www.wolframalpha.com/widget/widget.jsp?id=9970db3fa4b48d6aba3f3500b25f452f"></script>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/circuitos/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
            <div class="section-title">
                <h2>6.2 PROPIEDADES ARBOLES</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p><b>Características y propiedades más importantes de los árboles en general:</b></p>
                <ol>
                    <li>Todo árbol que no es vacío, tiene un único nodo raíz.</li>
                    <li>Un nodo X es descendiente directo de un nodo Y, si el nodo X es apuntado por el nodo Y. en este caso es común utilizar la expresión X es hijo de Y.</li>
                    <li>Un nodo X es antecesor directo de un nodo Y, si el nodo X apunta al nodo Y. en este caso es común utilizar la expresión X es padre de Y.</li>
                    <li>Se dice que todos los nodos que son descendientes directos (hijos) de un mismo nodo (padre), son hermanos.</li>
                    <li>Todo nodo que no tiene ramificaciones (hijos), se conoce con el nombre de terminal u hoja.</li>
                    <li>Todo nodo que no es raíz, ni terminal u hoja se conoce con el nombre de interior.</li>
                    <li>Grado es el número de descendientes directos de un determinado nodo. Grado del árbol es el máximo grado de todos los nodos del árbol, es decir, el grado más alto entre todos los nodos.</li>
                    <li>Nivel es el número de arcos que deben ser recorridos para llegar a un determinado nodo. Por definición la raíz tiene nivel 1.</li>
                    <li>Altura del árbol es el máximo número de niveles de todos los nodos del árbol.</li>
                </ol>
            </div>
            <div class="col-lg-12">
                <p>A continuación se presenta un ejemplo para clarificar estos conceptos:</p>
                <img src="<?= base_url()?>assets/images/arboles/arbol_3.png" alt="">
            </div>
            <div class="col-lg-12 pt-4">
                <ol>
                    <li>
                        <ul>
                            <li>8 es la raíz del árbol.</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>3 es hijo de 8.</li>
                            <li>10 es hijo de 8.</li>
                            <li>1 es hijo de 3.</li>
                            <li>14 es hijo de 10.</li>
                            <li>13 es hijo de 14.</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>8 es padre de 3.</li>
                            <li>3 es padre de 6.</li>
                            <li>6 es padre de 7.</li>
                            <li>10 es padre de 14.</li>
                            <li>14 es padre de 13.</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>3 y 10 son hermanos.</li>
                            <li>1 y 6 son hermanos.</li>
                            <li>4 y 7 son hermanos.</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>1, 4, 7, 13 son nodos terminales u hojas.</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>6, 14, 10,3 son nodos interiores.</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>El grado del nodo 8   es 2.</li>
                            <li>El grado del nodo 3   es 2.</li>
                            <li>El grado del nodo 6   es 2.</li>
                            <li>El grado del nodo 14 es 1.</li>
                            <li>El grado del nodo 1   es 0.</li>
                            <li>El grado del árbol es 3.</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>El nivel del nodo 8   es 1.</li>
                            <li>El nivel del nodo 3   es 2.</li>
                            <li>El nivel del nodo 6   es 3.</li>
                            <li>El nivel del nodo 10 es 2.</li>
                            <li>El nivel del nodo 13 es 4.</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('navbar');?>
<main>
    <div class="p-3">
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="<?= base_url()?>assets/images/logo_tecnm.png" style="height: 130px;" alt="">
            </div>
            <div class="col-lg-6 text-center">
                <img src="<?= base_url()?>assets/images/logo_itt.png" style="height: 130px;" alt="">
            </div>
            <div class="col-lg-12 text-center py-4">
                <h1>2.2 OPERACIONES CON CONJUNTOS </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 pt-4">
                <h3>2.2 OPERACIONES CON CONJUNTOS </h3>
                <h4>Unión</h4>
                <p>La unión de dos conjuntos A y B es el conjunto formado con todos los elementos que están en A y/o en B, y se denota por AUB. Esto se simboliza de la siguiente forma: </p>
                <p>Esto se simboliza de la siguiente forma: </p>
                <p>Ejemplo: Sean los conjuntos A= {1, 3, 5, 7, 9} y B= {10, 11, 12}</p>
                <p>A U B = {1, 3, 5, 7, 9, 10, 11, 12}</p>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_union.png" alt="">
            </div>
            <div class="col-lg-12 pt-4">
                <h4>Intersección </h4>
                <p>Sean A= {1, 2, 3, 4, 5, 6, 8, 9} y B= {2, 4, 8, 12}. Los elementos comunes a los dos conjuntos son: {2, 4, 8}. </p>
                <p>A este conjunto se le llama intersección de A y B; y se denota por A n B. Y se lee “el conjunto de elementos x que están en A y están en B”.</p>
                <p>Ejemplo: Sean </p>
                <ul>
                    <li>A = {a, n, p, y, q, s, r, o, b, k} </li>
                    <li>B = { l, u, a, o, s, r, b, v, y, z }</li>
                </ul>
                <p>Entonces, A n B = {a, b, o, r, s, y }</p>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_interseccion.gif" alt="">
            </div>
            <div class="col-lg-12 pt-4">
                <h4>Diferencia </h4>
                <p>Sean A y B dos conjuntos. La diferencia de A y B se indica como A-B y es el conjunto de los elementos de A que no están en B.</p>
                <p>Ejemplo: Sea </p>
                <p>A= {a, b, c, d} y B= {a, b, c, g, h}</p>
                <p>Entonces         A - B= { d }</p>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_diferencia.png" alt="">
                <p>En el ejemplo anterior se observa que solo interesan los elementos del conjunto A que no estén en B. </p>
                <p>Si la operación fuera B – A, el resultado es B – A = {g, h}, e indica los elementos que están en B y no en A.</p>
                <p>La diferencia simétrica de A y B, que se denota por: </p>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_diferencia_1.png" alt="">
                <br>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_diferencia_2.jpg" alt="">
            </div>
            <div class="col-lg-12 pt-4">
                <h4>Complemento </h4>
                <p>El complemento de un conjunto relacionado al conjunto universo U es el conjunto de elementos de U que no pertenecen a A y se indica como AC .</p>
                <p>Ejemplo, sea: </p>
                <ul>
                    <li>U= {1, 2, 3, 4, 5, 6, 7, 8, 9}</li>
                    <li>A= {1, 3, 5, 7, 9} </li>
                </ul>
                <p>Donde A X U. </p>
                <p>El complemento de A estará dado por: AC= {2, 4, 6, 8 }</p>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_complemento.png" alt="">
            </div>
            <div class="col-lg-12 pt-4">
                <h4>Producto cartesiano </h4>
                <p>Un producto cartesiano de dos conjuntos puede representarse como A X B, a todos los pares de elementos ordenados que podamos formar tomando como primer elemento un elemento del conjunto A y como segundo un elemento del conjunto B.</p>
                <p>Ejemplo:</p>
                <p>Sea los conjuntos A= {1, 5, 10} y B= {2, 4, 6} se tiene:</p>
                <p>AXB={(1,2),(1,4),(1,6),(5,2),(5,4),(5,6),(10,2),(10,4) ,(10,6)}</p>
                <p>Cuando el producto cartesiano es AXB no significa que sea igual al de BXA, pero si los conjuntos A y B tienen elementos comunes, entonces los elementos del producto cartesiano de la forma (a, a) reciben el nombre de elementos diagonales.</p>
                <p>Si el producto cartesiano fuese de un mismo conjunto AXA puede escribirse de forma representativa como A2; si lo forman más de dos conjuntos los elementos del producto cartesiano, lo formarán grupos de elementos tomados ordenadamente de cada uno de los conjuntos que lo forman, tomando un elemento de cada uno de los conjuntos.</p>
                <p>Para representar gráficamente el producto cartesiano como se muestra en la figura.3.1, utilizaremos la representación cartesiana, que consiste en trazar ejes perpendiculares. En el eje de las abscisas se representan los elementos del conjunto A y en el eje de las ordenadas los elementos del conjunto B; los elementos del producto cartesiano los forman los puntos de intercepción que se obtienen al trazar los elementos del conjunto A paralelos al eje de las ordenadas y por los elementos del conjunto B paralelos al eje de las abscisas.</p>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_cartesiano.png" alt="">
                <p>Y para conocer el número de elementos del producto cartesiano nos fijaremos en el diagrama de árbol. </p>
                <img src="<?= base_url()?>assets/images/conjuntos/operaciones_arbol.png" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
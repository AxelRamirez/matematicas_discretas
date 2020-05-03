<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/conjuntos/banner.png" alt="Insituto Tecnologico de Tijuana">
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
                <h2>UNIDAD 2 - CONJUNTOS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>Definiciones básicas de conjuntos </h3>
                <p>Un conjunto se considera una colección bien definida de objetos, con la esperanza de que, aunque dicha definición no es formal, la cotidianidad de la palabra “colección” nos permita avanzar sin mayores dificultades hacia el logro de los objetivos planteados. En otras palabras, esto significa que un conjunto no es solo cualquier colección de objetos, sino que además este debe estar bien definido en el sentido de que, si se considera cualquier objeto, se puede saber con certeza si es parte o no de la colección. </p>
                <p>Es importante establecer que a los objetos de un conjunto se les llama elementos o miembros del conjunto, y es común representarlos con letras minúsculas, a, b, c…, mientras que la notación usual para los propios conjuntos es con letras mayúsculas, A, B, C…. Por otra parte, hay dos maneras comunes de especificar un conjunto dado.</p>
                <p> La primera es mediante la presentación de un listado de sus elementos entre llaves; por ejemplo, si la consiste de todas las letras del alfabeto español, entonces a puede presentarse en la forma:</p>
                <br><p> a {a, b, c, …,z}</p><br>
                <p>La segunda forma de presentar un conjunto es especificando una regla que establece la propiedad o propiedades que un objeto debe satisfacer para ser considerado como un miembro del conjunto. Si se utiliza esta notación, el conjunto A puede ser presentado en la forma: </p>
                <br><p>A {a, t · q · a es una letra del alfabeto español} </p><br>
                <p>Y se lee: “A es el conjunto de todos los elementos a, tales que a es una letra del alfabeto español”. La notación que se usa para especificar que un objeto a es un elemento de un conjunto A es: </p>
                <img src="<?= base_url()?>assets/images/conjuntos/conjuntos_1.png" alt="">
                <p>Y se lee: “a es un elemento de A” o, en forma alternativa, “a pertenece a A”. </p>
                <p>Por otro lado, si el objeto a no es un elemento del conjunto A, entonces se escribe: </p>
                <img src="<?= base_url()?>assets/images/conjuntos/conjuntos_2.png" alt="">
                <p>Y se lee: “a no es un elemento de A” o, en forma alternativa, “a no pertenece a A”. </p>
                <p>De acuerdo con el concepto de conjunto definido antes, resulta claro que para que un conjunto A sea igual a un conjunto B, lo cual se denota por A=B, ambos deben tener exactamente los mismo elementos. </p>
                <br>
                <img src="<?= base_url()?>assets/images/conjuntos/conjuntos_3.png" alt="">
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
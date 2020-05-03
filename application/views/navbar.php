<?php $this->load->view('header');?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?= base_url()?>Dashboard">Matemáticas discretas</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
         <li class="drop-down"><a href="#">Unidad 1</a>
            <ul>
               <li><a href="<?= base_url()?>Numeracion">SISTEMAS DE NUMERACIÓN</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?= base_url()?>Numeracion/decimal">1.1 SISTEMA DE NUMERACIÓN DECIMAL</a></li>
               <li><a href="<?= base_url()?>Numeracion/binaria">1.2 SISTEMA DE NUMERACIÓN BINARIA</a></li>
               <li><a href="<?= base_url()?>Numeracion/octal">1.3 SISTEMA DE NUMERACIÓN OCTAL</a></li>
               <li><a href="<?= base_url()?>Numeracion/hexadecimal">1.4 SISTEMA DE NUMERACIÓN HEXADECIMAL</a></li>
               <li><a href="<?= base_url()?>Numeracion/cantidades">1.5 REPRESENTACIÓN DE CANTIDADES </a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?= base_url()?>Numeracion/convertidor">HERRAMIENTA | CONVERTIDOR</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Unidad 2</a>
            <ul>
               <li><a href="<?= base_url()?>Conjuntos">CONJUNTOS</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?= base_url()?>Conjuntos/subconjuntos">2.1 SUBCONJUNTOS</a></li>
               <li><a href="<?= base_url()?>Conjuntos/operaciones">2.2 OPERACIONES CON CONJUNTOS</a></li>
               <li><a href="<?= base_url()?>Conjuntos/diagramas">2.3 DIAGRAMAS DE VENN</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?= base_url()?>Conjuntos/simulador" class="dropdown-item">HERRAMIENTA | SIMULADOR DE CONJUNTOS</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Unidad 3</a>
            <ul>
               <li><a href="<?= base_url()?>Logica">LÓGICA MATEMÁTICA</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?= base_url()?>Logica/tablas">3.1 TABLAS DE VERDAD</a></li>
               <li><a href="<?= base_url()?>Logica/equivalencia">3.2 EQUIVALENCIA LÓGICA</a></li>
               <li><a href="<?= base_url()?>Logica/inferencia">3.3 REGLAS DE INFERENCIA</a></li>
               <li><a href="<?= base_url()?>Logica/predicados">3.4 LÓGICA DE PREDICADOS</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Unidad 4</a>
            <ul>
               <li><a href="<?= base_url()?>Circuitos">INTRODUCCIÓN A LOS CIRCUITOS LÓGICOS</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?= base_url()?>Circuitos/boole">4.1 ÁLGEBRA DE BOOLE</a></li>
               <li><a href="<?= base_url()?>Circuitos/operaciones">4.2 OPERACIONES BÁSICAS DEL ÁLGEBRA BOOLEANA</a></li>
               <li><a href="<?= base_url()?>Circuitos/componentes">4.3 COMPONENTES LÓGICOS</a></li>
               <li><a href="<?= base_url()?>Circuitos/teoremas">4.4 TEOREMAS DEL ÁLGEBRA DE BOOLE</a></li>
               <li><a href="<?= base_url()?>Circuitos/tablas">4.5 TABLAS DE VERDAD</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Unidad 5</a>
            <ul>
               <li><a href="<?= base_url()?>Grafos">INTRODUCCIÓN A LOS GRAFOS</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?= base_url()?>Grafos/componentes">5.1 COMPONENTES DE UN GRAFO</a></li>
               <li><a href="<?= base_url()?>Grafos/tipos">5.2 TIPOS DE GRAFOS</a></li>
               <li><a href="<?= base_url()?>Grafos/representacion">5.3 REPRESENTACIÓN DE LOS GRAFOS</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Unidad 6</a>
            <ul>
               <li><a href="#">ARBOLES</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="#">6.1 COMPONENTES DE UN ÁRBOL</a></li>
               <li><a href="#">6.2 PROPIEDADES ARBOLES</a></li>
               <li><a href="#">6.3 CLASIFICACIÓN ARBOLES</a></li>
               <li><a href="#">6.4 ARBOLES CON PESO</a></li>
               <li><a href="#">6.5 RECORRIDO DE UN ÁRBOL</a></li>
               <li><a href="#">6.6 ALGORITMOS DE RECORRIDO Y BÚSQUEDA</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->
      <a href="#about" class="get-started-btn scrollto">Admnistrador</a>
    </div>
  </header><!-- End Header -->
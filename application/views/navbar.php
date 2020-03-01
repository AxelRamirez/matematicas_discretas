<?php $this->load->view('header');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#">Matemáticas discretas</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="<?= base_url()?>Dashboard">Página principal <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 1
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a href="<?= base_url()?>Numeracion" class="dropdown-item">SISTEMAS DE NUMERACIÓN</a>
               <div class="dropdown-divider"></div>
               <a href="<?= base_url()?>Numeracion/decimal" class="dropdown-item">1.1 SISTEMA DE NUMERACIÓN DECIMAL</a>
               <a href="<?= base_url()?>Numeracion/binaria" class="dropdown-item">1.2 SISTEMA DE NUMERACIÓN BINARIA</a>
               <a href="<?= base_url()?>Numeracion/octal" class="dropdown-item">1.3 SISTEMA DE NUMERACIÓN OCTAL</a>
               <a href="<?= base_url()?>Numeracion/hexadecimal" class="dropdown-item">1.4 SISTEMA DE NUMERACIÓN HEXADECIMAL</a>
               <a href="<?= base_url()?>Numeracion/cantidades" class="dropdown-item">1.5 REPRESENTACIÓN DE CANTIDADES </a>
               <div class="dropdown-divider"></div>
               <a href="<?= base_url()?>Numeracion/convertidor" class="dropdown-item">HERRAMIENTA | CONVERTIDOR</a>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 2
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a href="<?= base_url()?>Conjuntos" class="dropdown-item">CONJUNTOS</a>
               <div class="dropdown-divider"></div>
               <a href="<?= base_url()?>Conjuntos/subconjuntos" class="dropdown-item">2.1 SUBCONJUNTOS</a>
               <a href="<?= base_url()?>Conjuntos/operaciones" class="dropdown-item">2.2 OPERACIONES CON CONJUNTOS</a>
               <a href="<?= base_url()?>Conjuntos/diagramas" class="dropdown-item">2.3 DIAGRAMAS DE VENN</a>
               <div class="dropdown-divider"></div>
               <a href="<?= base_url()?>Conjuntos/simulador" class="dropdown-item">HERRAMIENTA | SIMULADOR DE CONJUNTOS</a>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 3
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a href="#" class="dropdown-item">LÓGICA MATEMÁTICA</a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">3.1 TABLAS DE VERDAD</a>
               <a href="#" class="dropdown-item">3.2 EQUIVALENCIA LÓGICA</a>
               <a href="#" class="dropdown-item">3.3 REGLAS DE INFERENCIA</a>
               <a href="#" class="dropdown-item">3.4 LÓGICA DE PREDICADOS</a>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 4
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a href="#" class="dropdown-item">INTRODUCCIÓN A LOS CIRCUITOS LÓGICOS</a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">4.1 ÁLGEBRA DE BOOLE</a>
               <a href="#" class="dropdown-item">4.2 OPERACIONES BÁSICAS DEL ÁLGEBRA BOOLEANA</a>
               <a href="#" class="dropdown-item">4.3 COMPONENTES LÓGICOS</a>
               <a href="#" class="dropdown-item">4.4 TEOREMAS DEL ÁLGEBRA DE BOOLE</a>
               <a href="#" class="dropdown-item">4.5 TABLAS DE VERDAD</a>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 5
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a href="#" class="dropdown-item">INTRODUCCIÓN A LOS GRAFOS</a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">5.1 COMPONENTES DE UN GRAFO</a>
               <a href="#" class="dropdown-item">5.2 TIPOS DE GRAFOS</a>
               <a href="#" class="dropdown-item">5.3 REPRESENTACIÓN DE LOS GRAFOS</a>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Unidad 6
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a href="#" class="dropdown-item">ARBOLES</a>
               <div class="dropdown-divider"></div>
               <a href="#" class="dropdown-item">6.1 COMPONENTES DE UN ÁRBOL</a>
               <a href="#" class="dropdown-item">6.2 PROPIEDADES ARBOLES</a>
               <a href="#" class="dropdown-item">6.3 CLASIFICACIÓN ARBOLES</a>
               <a href="#" class="dropdown-item">6.4 ARBOLES CON PESO</a>
               <a href="#" class="dropdown-item">6.5 RECORRIDO DE UN ÁRBOL</a>
               <a href="#" class="dropdown-item">6.6 ALGORITMOS DE RECORRIDO Y BÚSQUEDA</a>
            </div>
         </li>
      </ul>
   </div>
</nav>
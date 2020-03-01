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
                <h1>1.5 REPRESENTACIÓN DE CANTIDADES </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>1.5 REPRESENTACIÓN DE CANTIDADES </h3>
                <p>En los sistemas digitales, la información que se está procesando, por lo general, se presenta en forma binaria. Desafortunadamente, el sistema numérico decimal no se presta para una implantación conveniente en sistemas digitales. Por ejemplo, resulta muy difícil diseñar equipo electrónico para que pueda funcionar con 10 diferentes niveles de voltaje (para que cada uno representara un carácter decimal, de 0 a 9). Por Otro lado, es muy fácil diseñar circuitos electrónicos precisos pero simples que operen con sólo dos niveles de voltaje. Por esta razón, casi todos los sistemas digitales utilizan el sistema numérico binario (base 2) como base de sus operaciones, aunque con frecuencia se emplean otros sistemas junto con el binario. </p>
                <p>En el sistema binario solamente hay dos símbolos o posibles valores de dígitos, el 0 y el 1. No obstante, este sistema de base 2 se puede utilizar para representar cualquier cantidad que se denote en sistema decimal o algún otro sistema numérico. </p>
                <p>En general, se necesitarán muchos dígitos binarios para expresar una cantidad determinada. Este es un sistema de valor posicional, en donde cada dígito binario tiene su valor propio expresado como potencia de 2. En el sistema binario, el término dígito binario se abrevia a menudo como bit. El bit más significativo (MSB) es aquel que se ubica más a la izquierda (el que tiene el mayor valor). El bit menos significativo (LSB) es aquel que está más a la derecha y que tiene el menor valor. </p>
                <p>Las cantidades binarias pueden representarse por medio de cualquier dispositivo que solamente tenga dos estados de operación o posibles condiciones. Por ejemplo, un interruptor sólo tiene dos estados: abierto o cerrado. Arbitrariamente, podemos hacer que un interruptor abierto represente el cero (0) binario y que uno cerrado represente el uno (1) binario. </p>
                <p>El sistema de numeración binario es el más importante de los sistemas digitales, pero hay otros que también lo son. La importancia del sistema decimal radica en que se utiliza universalmente para representar cantidades fuera de un sistema digital. Esto significa que habrá situaciones en las cuales los valores decimales tengan que convertirse en valores binarios antes de que se introduzcan al sistema digital. Por ejemplo, cuando se presiona un número decimal en una calculadora portátil (o una computadora), los circuitos que están dentro del dispositivo convierten el número decimal en un valor binario. </p>
                <p>De igual manera, habrá situaciones en que los valores binarios de las salidas de un circuito digital tengan que convertirse a valores decimales para presentarse al mundo exterior. Por ejemplo, una calculadora (o computadora) utiliza números binarios para calcular respuestas a un problema, luego las convierte a un valor decimal antes de exhibirías en la pantalla. </p>
                <p>Además del binario y el decimal, otros dos sistemas de numeración encuentran amplias aplicaciones en los sistemas digitales. Los sistemas octal (base 8) y hexadecimal (base 16) se usan con la misma finalidad: ofrecer un medio eficaz de representación de números binarios grandes. Como observaremos, ambos sistemas numéricos tienen la ventaja de que pueden convertirse fácilmente al y del binario. En un sistema digital, se pueden utilizar tres o cuatro de estos sistemas de numeración al mismo tiempo, de modo que un entendimiento de la operación del sistema requiere la facultad de convertir de un sistema numérico a otro. </p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
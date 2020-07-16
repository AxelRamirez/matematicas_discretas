<?php $this->load->view('navbar');?>
<main>
    <div clas="w-100">
        <img class="w-100 bannerIMG" src="<?= base_url()?>assets/images/logica/banner.jpg" alt="Insituto Tecnologico de Tijuana">
    </div>
    <div class="p-3 mt-2">
        <div class="container">
        <div class="section-title">
                <h2>3.3 REGLAS DE INFERENCIA</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Una regla de inferencia es un razonamiento verdadero que valida la verdad de una 
                conclusión a partir de premisas verdaderas; es decir, si las premisas son verdaderas, 
                la conclusión también tendrá que ser verdadera. </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Modus Ponendo Ponens – MPP </h3>
                <p>Esta regla establece que si la implicación de premisas y su antecedente son verdaderos, su consecuente es necesariamente verdadero.</p>
                <p>Simbólicamente</p>
                <ul>
                    <li>p → q “Si llueve, entonces las calles se mojan” (premisa)</li>
                    <li>p “Llueve” (premisa)</li>
                    <li>q “Luego, las calles se mojan” (conclusión)</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Modus Tollendo Tollens –MTT </h3>
                <p>Esta regla señala que si la implicación de premisas es verdadera y su consecuente es falso, entonces su antecedente es necesariamente falso.</p>
                <p>Simbólicamente</p>
                <ul>
                    <li>p → q “Si llueve, entonces las calles se mojan”</li>
                    <li>¬q “Las calles no se mojan”</li>
                    <li>¬p “Luego, no llueve”</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Modus Tollendo Ponens –MTP </h3>
                <p>Esta regla indica que si una disyunción de premisas es cierta y una de sus premisas es falsa, entonces la otra premisa es necesariamente verdadera.</p>
                <p>Simbólicamente</p>
                <ul>
                    <li>p V q “He ido al cine o me he ido de compras”</li>
                    <li>¬q “No he ido de compras”</li>
                    <li>p “Por tanto, he ido al cine”</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Regla de silogismo hipotético –RSH </h3>
                <p>Esta regla indica que si se tienen dos condicionales tales que el antecedente del segundo es el consecuente del primero, entonces se puede inferir como conclusión un condicional formado por el antecedente del primero y el consecuente del segundo.</p>
                <p>Simbólicamente</p>
                <ul>
                    <li>p → q “Si la bola roja golpea a la bola blanca, la bola blanca se mueve”</li>
                    <li>q → r “Si la bola blanca golpea a la bola negra, la bola negra se mueve”</li>
                    <li>p → r “Si la bola roja golpea a la bola blanca, la bola negra se mueve”</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Ley de la adición - LA</h3>
                <p>Dado un enunciado cualquiera, es posible expresarlo como una elección (disyunción) acompañado por cualquier otro enunciado.</p>
                <p>Simbólicamente</p>
                <ul>
                    <li>a “He comprado manzanas”</li>
                    <li>a V b “He comprado manzanas o he comprado peras”</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Silogismo Disyuntivo -DS</h3>
                <p>Dadas tres premisas, dos de ellas implicaciones, y la tercera una disyunción cuyos miembros sean los antecedentes de los condicionales, podemos concluir en una nueva premisa en forma de disyunción, cuyos miembros serían los consecuentes de las dos implicaciones. Lógicamente, si planteamos una elección entre dos causas, podemos plantear una elección igualmente entre sus dos posibles efectos, que es el sentido de esta regla.</p>
                <p>Simbólicamente</p>
                <ul>
                    <li>p → q “Si llueve, entonces las calles se mojan”</li>
                    <li>r → s “Si la tierra tiembla, los edificios se caen”</li>
                    <li>p V r “Llueve o la tierra tiembla”</li>
                    <li>q V s “Las calles se mojan o los edificios se caen”</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Simplificación Disyuntiva -SD</h3>
                <p>Si disponemos de dos premisas que corresponden a dos implicaciones con el mismo consecuente, y sus antecedentes se corresponden con los dos miembros de una disyunción, podemos concluir con el consecuente de ambas implicaciones.</p>
                <p>Simbólicamente</p>
                <ul>
                    <li>p V q “Helado de fresa o helado de vainilla”</li>
                    <li>p → r “Si tomas helado de fresa, entonces repites”</li>
                    <li>q → r “Si tomas helado de vainilla, entonces repites”</li>
                    <li>r Luego, repites</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Ley conmutativa</h3>
                <p>Esta ley, no es válida para la implicación, pero sí para conjunción y para la disyunción. Una conjunción es afirmar que se dan dos cosas a la vez, de modo que el orden de sus elementos no cambia este hecho. Igualmente, una disyunción es presentar una elección entre dos cosas, sin importar en qué orden se presente esta elección. </p>
                <p>Simbólicamente</p>
                <ul>
                    <li>p Λ q ↔ q Λ p “«p y q» equivale a «q y p»”</li>
                    <li>p V q ↔ q V p “«p ó q» equivale a «q ó p»</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <h3>Leyes de morgan -DM</h3>
                <p>Esta ley permite transformar una disyunción en una conjunción, y viceversa, es decir, una conjunción en una disyunción. Cuando se pasa de una a otra, se cambian los valores de afirmación y negación de los términos de la disyunción/conjunción así como de la propia operación en conjunto, como podemos observar aquí:</p>
                <ul>
                    <li>p Λ q p V q</li>
                    <li>¬(¬p V ¬q) ¬(¬p Λ ¬q)</li>
                </ul>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
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
                <h1>1.3 SISTEMA DE NUMERACIÓN OCTAL</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>1.3 SISTEMA DE NUMERACIÓN OCTAL</h3>
                <p>Se trata de un sistema de numeración en base 8 que utiliza 8 símbolos para la representación de cantidades. Los símbolos utilizados son: 0, 1, 2, 3, 4, 5, 6, 7. </p>
                <p>Este sistema también posicional, ya que cada una de sus cifras tiene como posición la relativa al punto decimal que, en caso de no aparecer se supone implícita al lado derecho del número, este proporciona un método conveniente para la representación de códigos y números binarios utilizados en los sistemas digitales. </p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
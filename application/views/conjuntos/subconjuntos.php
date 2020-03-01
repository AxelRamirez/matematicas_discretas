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
                <h1>2.1 SUBCONJUNTOS </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h3>2.1 SUBCONJUNTOS </h3>
                <p>Sean los conjuntos A={ a, b, c, d, f } y B={ c, d, e }: </p>
                <img src="<?= base_url()?>assets/images/conjuntos/subconjuntos_1.png" alt="">
                <p>De acuerdo al gráfico anterior, se denota que el conjunto B es un subconjunto de A, simplemente porque pertenece, o bien se encuentra adentro de A; entonces, si A y B son dos conjuntos cualesquiera, decimos que B es un subconjunto de A si todo elemento de B también es de A.</p>
                <p>De acuerdo a lo anterior, si B es un subconjunto de A se escribe B c A. Si B no es subconjunto de A se indicará con una diagonal.</p>
            </div>
        </div>
    </div>
</main>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
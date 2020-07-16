<?php $this->load->view('header');?>
<?php $this->load->view('navbar');?>
<main class="p-4">
	<nav aria-label="breadcrumb" class="pt-2">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a class="action-breadcrumb" href="<?= base_url()?>User/list">Usuario</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
        </ol>
    </nav>
	<div class="border p-4">
		<div class="row">
			<div class="col-md-3">
				<h2>Usuario</h2>
			</div>
		</div>
		<?php echo form_open('User/add', array('id' => 'frmAddUser')); ?>
		<div class="row" style="margin-top: 20px">
			<div class="col-md-4">
				<label>Usuario</label>
				<input type="text" class="form-control" name="Login" required="">
			</div>
			<div class="col-md-4">
				<label>Contraseña</label>
				<input minlength="4" type="password" class="form-control" name="Password" required="">
			</div>
			<div class="col-md-4">
				<label>Rol</label>
				<select class="form-control" name="Role"  id="Role" required="">
					<option value="" disabled="" selected="">Select Rol</option>
					<?php foreach ($roles as $key => $role): ?>
						<option value="<?= $role->id ?>"><?= $role->name ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="row" style="margin-top: 20px">
			<div class="col-md-4">
				<label>Nombre(s)</label>
				<input type="text" class="form-control" name="NameF" required="">
			</div>
			<div class="col-md-4">
				<label>Apellido(s)</label>
				<input type="text" class="form-control" name="NameL" required="">
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-md-2" style="margin-top: 20px">
				<button onclick="window.history.back();" type="button" class="btn btn-danger btn-block">Cancelar</button>
			</div>
			<div class="col-md-2" style="margin-top: 20px">
				<button type="submit" class="btn btn-success btn-block">Guardar</button>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer');?>
<script type="text/javascript">
	$("body").on('mouseenter', 'tr', function(){
        $(this).find('.removeLine').show();
    });
    $("body").on('mouseleave', 'tr', function(){
        $(this).find('.removeLine').hide();
    });
</script>
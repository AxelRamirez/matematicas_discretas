<?php $this->load->view('header');?>
<?php $this->load->view('navbar');?>
<main class="p-4">
	<nav aria-label="breadcrumb" class="pt-2">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a class="action-breadcrumb" href="<?= base_url()?>User/list">Usuario</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $user->first_name.' '.$user->last_name ?> (Edición)</li>
        </ol>
    </nav>
	<div class="border p-4">
		<div class="row">
			<div class="col-md-3">
				<h2>Usuario</h2>
			</div>
		</div>
		<?php echo form_open('User/update/'.$this->uri->segment(3), array('id' => 'frmUpdateUser')); ?>
		<div class="row" style="margin-top: 20px">
			<div class="col-md-4">
				<label>Usuario</label>
				<input value="<?= $user->username ?>" type="text" class="form-control" name="Login" required="">
			</div>
			<div class="col-md-4">
				<label>Nueva contraseña</label>
				<input minlength="4" type="password" class="form-control" name="Password">
			</div>
			<div class="col-md-4">
				<label>Rol</label>
				<select class="form-control" name="Role"  id="Role" required="">
					<option value="" disabled="" selected="">Select Rol</option>
					<?php foreach ($roles as $key => $role): ?>
						<option value="<?= $role->id ?>" <?php if($role->id == $user->rol_id){echo 'selected';}?>><?= $role->name ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="row" style="margin-top: 20px">
			<div class="col-md-4">
				<label>Nombre(s)</label>
				<input value="<?= $user->first_name ?>" type="text" class="form-control" name="NameF" required="">
			</div>
			<div class="col-md-4">
				<label>Apellido(s)</label>
				<input value="<?= $user->last_name ?>" type="text" class="form-control" name="NameL" required="">
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-md-2" style="margin-top: 20px">
				<button onclick="window.history.back();" type="button" class="btn btn-danger btn-block">Cancelar</button>
			</div>
			<div class="col-md-2" style="margin-top: 20px">
				<button type="submit" class="btn btn-primary btn-block">Guardar</button>
				<div id="removelist"></div>
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
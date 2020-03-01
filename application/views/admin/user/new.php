<?php $this->load->view('header');?>
<?php $this->load->view('navbar');?>
<div class="container">
	<div class="row" style="margin-top: 20px">
		<div class="col-md-3">
			<h2>User</h2>
		</div>
	</div>
	<?php echo form_open('user/add', array('id' => 'frmAddUser')); ?>
	<div class="row" style="margin-top: 20px">
		<div class="col-md-4">
			<label>Login</label>
			<input type="text" class="form-control" name="Login" required="">
		</div>
		<div class="col-md-4">
			<label>Password</label>
			<input type="password" class="form-control" name="Password" required="">
		</div>
		<div class="col-md-4">
			<label>Role</label>
			<select class="form-control" name="Role" required="">
				<option value="" disabled="" selected="">Select Rol</option>
				<?php foreach ($roles as $key => $role): ?>
					<option value="<?= $role->ROL_ID ?>"><?= $role->ROL_NAME ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="row" style="margin-top: 20px">
		<div class="col-md-4">
			<label>First Name</label>
			<input type="text" class="form-control" name="NameF" required="">
		</div>
		<div class="col-md-4">
			<label>Last Name</label>
			<input type="text" class="form-control" name="NameL" required="">
		</div>
	</div>
	<div class="row justify-content-end">
		<div class="col-md-2" style="margin-top: 20px">
			<button onclick="window.history.back();" type="button" class="btn btn-danger btn-block">Cancel</button>
		</div>
		<div class="col-md-2" style="margin-top: 20px">
			<button type="submit" class="btn btn-success btn-block">Save</button>
		</div>
	</div>
</div>
<?php $this->load->view('footer');?>
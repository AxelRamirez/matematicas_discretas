<?php $this->load->view('header');?>
<?php $this->load->view('navbar');?>
<div class="container">
	<div class="row" style="margin-top: 20px">
		<div class="col-md-3">
			<h2>User</h2>
		</div>
	</div>
	<?php echo form_open('user/update/'.$this->uri->segment(3), array('id' => 'frmUpdateUser')); ?>
	<div class="row" style="margin-top: 20px">
		<div class="col-md-4">
			<label>Login</label>
			<input value="<?= $user->USR_LOGIN ?>" type="text" class="form-control" name="Login" required="">
		</div>
		<div class="col-md-4">
			<label>New Password</label>
			<input type="password" class="form-control" name="Password">
		</div>
		<div class="col-md-4">
			<label>Role</label>
			<select class="form-control" name="Role" required="">
				<option value="" disabled="" selected="">Select Rol</option>
				<?php foreach ($roles as $key => $role): ?>
					<option value="<?= $role->ROL_ID ?>" <?php if($role->ROL_ID == $user->USR_ROL_ID){echo 'selected';}?>><?= $role->ROL_NAME ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="row" style="margin-top: 20px">
		<div class="col-md-4">
			<label>First Name</label>
			<input value="<?= $user->USR_FIRST_NAME ?>" type="text" class="form-control" name="NameF" required="">
		</div>
		<div class="col-md-4">
			<label>Last Name</label>
			<input value="<?= $user->USR_LAST_NAME ?>" type="text" class="form-control" name="NameL" required="">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematicas discretas | Administrador</title>
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet">
</head>
<body>
    <?php $alertas = $this->session->flashdata('alerts'); ?>
    <?php if (isset($alertas['errors'])): ?>
        <label><?php echo $alertas[ 'errors']; ?></label>
    <?php endif ?>
    <main class="login-form">
        <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Iniciar sesión como Administrador</div>
                        <div class="card-body">
                            <?php echo form_open_multipart('VerifyLogin',array('id'=>'frmLogin')) ?>
                                <div class="form-group row">
                                    <label for="User" class="col-md-4 col-form-label text-md-right">User</label>
                                    <div class="col-md-6">
                                        <input type="text" id="User" class="form-control" name="User" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="Password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="Password" class="form-control" name="Password" required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Entrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>
</html>
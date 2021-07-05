<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sanggar Seni Dwipayana Nusantara | Daftar</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/iCheck/square/blue.css' ?>">


</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div>
			<p><?php echo $this->session->flashdata('msg'); ?></p>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg"> <img src="<?php echo base_url() . 'assets/images/mylogo.png' ?>"></p>
			<hr />

			<form action="<?php echo base_url() . 'register/regist' ?>" method="post">
				<div class="form-group has-feedback">
				<input type="hidden" name="ref" class="form-control" value="<?php echo $ref ?>"/>
					<input type="text" name="name" class="form-control" placeholder="Nama" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" name="username" class="form-control" placeholder="Username" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" name="email" class="form-control" placeholder="Email" required>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
					<span class="glyphicon glyphicon-home form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="password" class="form-control" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="number" name="phone" class="form-control" placeholder="No hp" required>
					<span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<!-- /.social-auth-links -->
			<hr />
			<p>
				<center>Copyright <?php echo date('Y'); ?> <br /> All Right Reserved</center>
			</p>
		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 2.2.3 -->
	<script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js' ?>"></script>
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
	<!-- sweet alert -->
	<?php if ($this->session->flashdata('gagal_daftar')): ?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			Swal.fire({
				title: 'WARNING',
				text: "Pendaftaran anda gagal silahkan hubungi admin",
				icon: 'warning',
				confirmButtonColor: 'blue',
				confirmButtonText: 'Ok'
			})
		</script>
	<?php endif; ?>
</body>

</html>
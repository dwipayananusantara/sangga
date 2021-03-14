<div class="modal fade" id="loginform" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title">Login</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="login_wrap">
						<div class="col-md-12 col-sm-6">
							<form action="<?php echo base_url() . 'login/auth' ?>" method="post">
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Alamat Email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="submit" name="login" value="Login" class="btn btn-block">
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
			<div class="modal-footer text-center">
				<p>Belum punya akun? <a href="regist.php">Daftar Disini</a></p>
				<form action="<?php echo base_url() . 'register' ?>" method="post">
					<center>Daftar Disini <button type="submit" class="btn btn-primary btn-block btn-flat">register</button> </center>
			</form>
			</div>
		</div>
	</div>
</div>

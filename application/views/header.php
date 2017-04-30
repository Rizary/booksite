<!DOCTYPE html>
<html>
	<head>
		<title>BookSite.com</title>
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/booksite.css'); ?>">
	</head>
	<body>
		<div class="row">
			<header>
				<nav class="nav navbar-default main-color">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar-brand" href="#">BookSite</a>
						</div>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a role="button" data-toggle="modal" data-target="#modal-login">Login</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
		</div>

		<!-- Modal Login -->
		<div id="modal-login" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Login</h4>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
						<p style="text-align: center;">
							Belum punya akun? <a role="button" data-toggle="modal" data-target="#modal-registrasi" data-dismiss="modal">Daftar</a>
						</p>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- end Modal Login	-->

		<!-- Modal Registrasi -->
		<div id="modal-registrasi" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">Registrasi</h4>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="email" class="form-control" id="nama" name="nama" placeholder="Nama">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="confirm-password">Konfirmasi Password</label>
								<input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Konfirmasi Password">
							</div>
							<button type="submit" class="btn btn-primary">Daftar</button>
						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- end Modal Registrasi	-->
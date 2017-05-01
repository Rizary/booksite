
		<div class="row">
			<footer>
				<nav class="navbar navbar-default main-color">
					<div class="container">
						Copyright &copy; 2017 | 3IA01
					</div>
				</nav>
			</footer>
		</div>


		<!-- JavaScript -->
		<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.2.1.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/booksite.js'); ?>"></script>


		<script type="text/javascript">
			$(document).ready(function() {
				$("#btn-detail").click(function() {
					var id = $(this).val();
					console.log(id);
					
				});
			});
		</script>
	</body>
</html>
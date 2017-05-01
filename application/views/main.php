<!-- SIDEBAR -->
				<aside>
					<div class="col-md-2">
			            <nav class="nav-sidebar">
			                <ul class="nav">
			                    <!-- <li class="active"><a href="javascript:;">Home</a></li> -->
			                    <li><a role="button" data-toggle="collapse" href="#katalog-list" aria-expanded="false" aria-controls="katalog-list">Katalog</a></li>
			                    <div class="collapse" id="katalog-list">
			                    <!--
			                    	<li><a role="button">Komik</a></li>
			                    	<li><a role="button">Pelajaran</a></li>
			                    	<li><a role="button">Lain-lain</a></li>
			                    -->

			                    	<?php
			                    	foreach ($katalog as $value) {
			                    		echo "<li>";
			                    		echo "<a id='" . $value["id"] . "' role='button'>" . $value["katalog"] . "</a>";
			                    		echo "</li>";
			                    	}
			                    	?>
			                    </div>
			                    <li class="nav-divider"></li>
			                    <li><a  role="button" data-toggle="collapse" href="#kategori-list" aria-expanded="false" aria-controls="kategori-list">Kategori</a></li>
			                    <div class="collapse list-group" id="kategori-list">
			                    <!--
			                    	<li><a role="button">Dewasa</a></li>
			                    	<li><a role="button">Anak</a></li>
			                    	<li><a role="button">Lain-lain</a></li>
			                    -->

			                    	<?php
			                    	foreach ($kategori as $value) {
			                    		echo "<li>";
			                    		echo "<a id='" . $value["id"] . "' role='button'>" . $value["kategori"] . "</a>";
			                    		echo "</li>";
			                    	}
			                    	?>
			                    </div>
			                </ul>
			            </nav>
			        </div>
				</aside> <!-- end SIDEBAR -->

				<!-- MAIN -->
				<main>
					<div class="col-md-10">
						<!-- Search -->
						<div class="row">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control" id="inputGroupSuccess4" placeholder="Search...">
									<span class="input-group-addon"><span role="button" class="glyphicon glyphicon-search"></span></span>
								</div>
							</div>
						</div> <!-- end search -->

						<!-- Etalase -->
						<div id="etalase" class="row">
							<div class="col-md-12">

								<?php
								//$rec = 0;
								//$jml_rec;

								echo '<div class="row">';

								foreach ($hasil as $value) {
									echo '<div class="col-md-3">';
									echo '<div class="panel panel-default">';
									
									echo '<div class="panel-body">';
									$gambar = $value["gambar"];
									echo '<img src=' . base_url("assets/img/buku/$gambar") . ' class="img-responsive" alt="sampul_buku">';
									echo '</div>';

									echo '<div class="panel-footer">';
									echo '<div class="row">';
									echo '<div class="col-md-12">';
									echo $value["judul"];
									echo '</div>';
									echo '</div>';
									echo '<div class="row">';
									echo '<div class="col-md-9">';
									echo $value["harga"];
									echo '</div>';
									echo '<div class="col-md-3">';
									echo $value["hal"];
									echo '</div>';
									echo '</div>';

									echo '<div class="row">';
									echo '<div class="col-md-12">';
									echo '<div class="btn-group btn-group-justified" role="group" aria-label="...">';
									echo '<div class="btn-group" role="group">';
									echo '<button value="'. $value["id_buku"] .'" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-book-detail">Detail</button>';
									echo '</div>';
									echo '<div class="btn-group" role="group">';
									echo '<button value="' . $value["id_buku"] .'" type="button" class="btn btn-default">Beli</button>';
									echo '</div>';
									echo '<div class="btn-group" role="group">';
									echo '<button value="' . $value["id_buku"] . '" type="button" class="btn btn-default">Wish</button>';
									echo '</div>';
									echo '</div>';
									echo '</div>';
									echo '</div>';

									echo '</div>';

									echo '</div>';
									echo '</div>';
								}

								echo '</div>';

								?>
<!--
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223094621.jpg'); ?>" class="img-responsive" alt="buku1">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="btn-group btn-group-justified" role="group" aria-label="...">
															<div class="btn-group" role="group">
																<button id="btn-detail" value="1" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-book-detail">Detail</button>
															</div>
															<div class="btn-group" role="group">
																<button id="btn-beli" value="1" type="button" class="btn btn-default">Beli</button>
															</div>
															<div class="btn-group" role="group">
																<button id="btn-wish" value="1" type="button" class="btn btn-default">Wish</button>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223094621.jpg'); ?>" class="img-responsive" alt="buku2">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="btn-group btn-group-justified" role="group" aria-label="...">
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Detail</button>
															</div>
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Beli</button>
															</div>
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Wish</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223094621.jpg'); ?>" class="img-responsive" alt="buku3">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="btn-group btn-group-justified" role="group" aria-label="...">
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Detail</button>
															</div>
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Beli</button>
															</div>
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Wish</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223094621.jpg'); ?>" class="img-responsive" alt="buku4">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="btn-group btn-group-justified" role="group" aria-label="...">
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Detail</button>
															</div>
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Beli</button>
															</div>
															<div class="btn-group" role="group">
																<button type="button" class="btn btn-default">Wish</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223095301.jpg'); ?>" class="img-responsive" alt="buku5">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223095301.jpg'); ?>" class="img-responsive" alt="buku6">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223094621.jpg'); ?>" class="img-responsive" alt="buku7">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body">
												<img src="<?= base_url('assets/img/buku/20170223095301.jpg'); ?>" class="img-responsive" alt="buku8">
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-12">
														Sistem Operasi
													</div>
												</div>
												<div class="row">
													<div class="col-md-9">
														Rp 56,000,-
													</div>
													<div class="col-md-3">
														50
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
-->
							</div>
						</div> <!-- end Etalase -->

						<!-- Pagination -->
						<div class="row">
							<nav class="navbar-right" aria-label="Page navigation">
								<ul class="pagination">
									<li>
										<a href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
									<li>
										<a href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</div> <!-- end Pagination -->

						<!-- Modal -->
						<div id="modal-book-detail" class="modal fade" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h4 class="modal-title">Detail</h4>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-md-4">
												<img src="<?= base_url('assets/img/buku/20170223094621.jpg'); ?>" class="img-responsive" alt="buku1">
											</div>
											<div class="col-md-8">
												<table>
													<tbody>
														<tr>
															<td>Judul</td>
															<td>: </td>
														</tr>
														<tr>
															<td>Pengarang</td>
															<td>: </td>
														</tr>
														<tr>
															<td>Penerbit</td>
															<td>: </td>
														</tr>
														<tr>
															<td>Tanggal Terbit</td>
															<td>: </td>
														</tr>
														<tr>
															<td>Jumlah Halaman</td>
															<td>: </td>
														</tr>
														<tr>
															<td>Harga</td>
															<td>: </td>
														</tr>
														<tr>
															<td>Stok</td>
															<td>: </td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<span>Deskripsi :</span>
										<p>
											Ingin lebih tahu tentang Sistem Operasi ? Buku ini...
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary">Beli</button>
										<button type="button" class="btn btn-primary">Wish</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- end Modal 	-->
					</div>
				</main> <!-- end MAIN -->
					<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
					<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
					<!-- Content Wrapper. Contains page content -->
					<div class="content-wrapper">
						<!-- Content Header (Page header) -->
						<section class="content-header">
							<div class="container-fluid">
								<div class="row mb-2">
									<div class="col-sm-6">
										<h1>Template CRUD</h1>
									</div>
									<div class="col-sm-6">
										<ol class="breadcrumb float-sm-right">
											<li class="breadcrumb-item"><a href="#">Home</a></li>
											<li class="breadcrumb-item active">DataTables</li>
										</ol>
									</div>
								</div>
							</div><!-- /.container-fluid -->
						</section>

						<!-- Main content -->
						<section class="content">
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">DataTable with default features</h3>
											</div>
											<!-- /.card-header -->
											<div class="card-body">
												<table id="example1" class="display nowrap" style="width:100%">
													<thead>
														<tr>
															<th>Rendering engine</th>
															<th>Browser</th>
															<th>Platform(s)</th>
															<th>Engine version</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Trident</td>
															<td>Internet
																Explorer 4.0
															</td>
															<td>Win 95+</td>
															<td> 4</td>
															<td>
																<a class="edit btn btn-xs btn-warning" href=' . base_url("xx_secret/employer/view/" . $row[' id']) . ' title="Employer Details" > 
																<i class="fa fa-eye"></i></a>&nbsp;&nbsp;
																<!-- <a class="edit btn btn-xs btn-primary" href=' . base_url("xx_secret/employer/edit/" . $row['id']) . ' title="Job Details" > 
																<i class="fa fa-edit"></i></a>&nbsp;&nbsp; -->
																<a class="edit btn btn-xs btn-primary" href=' #' title="Job Details" data-toggle="modal" data-target="#myModal">
																	<i class="fa fa-edit"></i></a>&nbsp;&nbsp;
																<a class="delete btn btn-xs btn-danger" href=' #' title="Delete" data-toggle="modal" data-target="#modal-danger">
																	<i class="fa fa-trash-o"></i></a>
															</td>
														</tr>
														<tr>
															<td>Trident</td>
															<td>Internet
																Explorer 5.0
															</td>
															<td>Win 95+</td>
															<td>5</td>
															<td>C</td>
														</tr>
														<tr>
															<td>Trident</td>
															<td>Internet
																Explorer 5.5
															</td>
															<td>Win 95+</td>
															<td>5.5</td>
															<td>A</td>
														</tr>
														<tr>
															<td>Trident</td>
															<td>Internet
																Explorer 6
															</td>
															<td>Win 98+</td>
															<td>6</td>
															<td>A</td>
														</tr>
														<tr>
															<td>Trident</td>
															<td>Internet Explorer 7</td>
															<td>Win XP SP2+</td>
															<td>7</td>
															<td>A</td>
														</tr>
														<tr>
															<td>Trident</td>
															<td>AOL browser (AOL desktop)</td>
															<td>Win XP</td>
															<td>6</td>
															<td>A</td>
														</tr>


													</tbody>
													<tfoot>
														<tr>
															<th>Rendering engine</th>
															<th>Browser</th>
															<th>Platform(s)</th>
															<th>Engine version</th>
															<th>CSS grade</th>
														</tr>
													</tfoot>
												</table>
											</div>
											<!-- /.card-body -->
										</div>
										<!-- /.card -->
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.container-fluid -->
						</section>
						<!-- /.content -->
					</div>
					<!-- /.content-wrapper -->

					<!-- Control Sidebar -->
					<aside class="control-sidebar control-sidebar-dark">
						<!-- Control sidebar content goes here -->
					</aside>
					<!-- /.control-sidebar -->
					<div class="modal fade" id="modal-danger">
						<div class="modal-dialog">
							<div class="modal-content bg-danger">
								<div class="modal-header">
									<h4 class="modal-title">Danger Modal</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>One fine body&hellip;</p>
								</div>
								<div class="modal-footer justify-content-between">
									<button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-outline-light">Save changes</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->

					<!-- The Modal -->
					<div class="modal fade" id="myModal">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h4 class="modal-title">Form Tambah Master Wilayah</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<form action="Master_wilayah/insert_wilayah" method="post">

										<div class="form-group">
											<label for="usr">Nama Wilayah :</label>
											<input type="text" name="nama_wilayah" class="form-control" required autocomplete="off">
										</div>
										<div class="form-group">
											<label for="sel1">Tipe Wilayah :</label>
											<select class="form-control" name="tipe_wilayah" id="tipe_wilayah1" required>
												<option value="" selected="" disabled="">-- Pilih Wilayah --</option>
												<option value="0">Kelurahan</option>
												<option value="1">Kecamatan</option>
												<option value="2">Kota / Kabupaten</option>
											</select>
										</div>
										<div class="form-group">
											<label for="sel1">Parent Wilayah :</label>
											<select class="form-control" name="parent_id" id="id_parent1" required>
												<option value="" selected="" disabled="">-- Pilih Wilayah --</option>


											</select>
										</div>
										<div class="form-group">
											<label>Date:</label>
											<input type="text" id="datepicker" name="datepicker" class="form-control" placeholder="yyyy/mm/dd" autocomplete="off" required>
										</div>
										<div class="form-group">
											<label for="usr">Longitude :</label>
											<input type="text" name="longitude" class="form-control" required autocomplete="off">
										</div>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button class="btn btn-info" name="submit_wilayah" type="submit">Simpan</button>
								</div>

								</form>

							</div>
						</div>
					</div>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
	<script src="https://kit.fontawesome.com/b02fc4ca1e.js" crossorigin="anonymous"></script>
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
	<!-- summernote -->
	<link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<nav>
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Home</a>
					</li>
					{{-- <li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Tambah User</a>
					</li> --}}
				</ul>

				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<!-- Navbar Search -->
					<li class="nav-item">
						<a class="nav-link" data-widget="navbar-search" href="#" role="button">
							<i class="fas fa-search"></i>
						</a>
						<div class="navbar-search-block">
							<form class="form-inline">
								<div class="input-group input-group-sm">
									<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
									<div class="input-group-append">
										<button class="btn btn-navbar" type="submit">
											<i class="fas fa-search"></i>
										</button>
										<button class="btn btn-navbar" type="button" data-widget="navbar-search">
											<i class="fa-solid fa-xmark"></i>
										</button>
									</div>
								</div>
							</form>
						</div>

					</li>

				</ul>

			</nav>

		</nav>
		<aside>
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<i class="fa-solid fa-user" style="color: #ffffff;"></i>
						</div>
						<div class="image">
							<a href="#" class="d-block">Admin</a>
						</div>
					</div>

					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
						   with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="/admin/dashboard" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Dashboard
										<i class="right "></i>
									</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/admin/product" class="nav-link">
									<i class="nav-icon fa-solid fa-gamepad"></i>
									<p>
										Game
										<i class="right "></i>
									</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('logout') }}" class="nav-link">
									<i class="nav-icon fa-solid fa-right-from-bracket"></i>
									<p>
										Logout
									</p>
								</a>
							</li>
						</ul>
					</nav>
					<!-- /.sidebar-menu -->

				</div>
				<!-- /.sidebar -->
			</aside>
		</aside>





		<div class="content-wrapper">
			<div class="card">
				<!-- <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div> -->
				<!-- /.card-header -->
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th style="width: 10px">ID</th>
								<th>Name</th>
								<th>No.hp</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $users)
							<tr>
								<td>
									<p>{{ $users->id }}</p>
								</td>
								<td>
									<p>{{ $users->name }}
								</td>
								<td>
									<p>{{ $users->nohp }}</p>
								</td>
								<td>
									<p>{{ $users->role }}</p>
								</td>
								<td class="row">
									<div class="col-3">
										<button type="button" class="btn btn-outline-warning btn-block mb-3" data-toggle="modal" data-target="#modal-default{{ $users->id }}">Edit</button>
									</div>
									<div class="col-3">
										<form method="POST" action="{{ route('deleteuser',$users->id) }}" onsubmit="return confirm('Are you sure you want to delete this user?')">
											@csrf
											@method('DELETE')
											<input type="hidden" name="userId" value="{{ $users->id }}">
											<button type="submit" class="btn btn-block btn-outline-danger">Delete</button>
										</form>
									</div>
								</td>
							</tr>

							<div class="modal fade" id="modal-default{{ $users->id }}">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="modal{{ $users->id }}">Update User</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="{{ route('updateuser', $users->id) }}" method="POST">
												@csrf
												@method('PUT')
												<div class="form-group">
													<label for="name">Name:</label>
													<input type="text" name="name" class="form-control" value="{{ $users->name }}" required>
												</div>
												<div class="form-group">
													<label for="nohp">No. HP:</label>
													<input type="tel" name="nohp" class="form-control" value="{{ $users->nohp }}" required>
												</div>
												<div class="form-group">
													<label for="role">Role:</label>
													<select name="role" class="form-control" required>
														<option value="admin" {{ $users->role === 'admin' ? 'selected' : '' }}>Admin</option>
														<option value="users" {{ $users->role === 'user' ? 'selected' : '' }}>User</option>
													</select>
												</div>
										</div>
										<div class="modal-footer justify-content-between">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
										</div>
										</form>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
				<div class="card-footer clearfix">
					<ul class="pagination pagination-sm m-0 float-right">
						<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
					</ul>
				</div>
			</div>
		</div>




















		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->










	<!-- jQuery -->
	<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<!-- ChartJS -->
	<script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ asset('lte/plugins/sparklines/sparkline.js') }}"></script>
	<!-- JQVMap -->
	<script src="{{ asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
	<!-- daterangepicker -->
	<script src="{{ asset('lte/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	<!-- Summernote -->
	<script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
	<!-- overlayScrollbars -->
	<script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
	{{-- Dtaable --}}
	<!-- DataTables  & Plugins -->
	<script src="{{ asset('lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/jszip/jszip.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
	<script src="{{ asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"lengthChange": false,
				"autoWidth": false,
				"buttons": ["copy", "csv", "excel", "pdf", "print"]
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": true,
				"responsive": true,
			});
		});
	</script>
</body>

</html>
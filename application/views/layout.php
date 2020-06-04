<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Inventaris Barang</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTE/plugins/fontawesome-free/css/all.min.css">
	<!-- daterange picker -->
	<!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTEplugins/daterangepicker/daterangepicker.css"> -->
	<!-- iCheck for checkboxes and radio inputs -->
	<!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTEplugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTE/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/adminLTE/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css"> -->

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">
		<!-- Navbar File-->
		<?php include('include/navbar.php'); ?>
		<?php include('include/sidebar.php'); ?>
		<!--main content start-->
		<?php $this->load->view($layout); ?>
		<!--main content end-->

		<!-- Footer File-->
		<?php include('include/footer.php'); ?>

	</div>
	<!-- ./wrapper -->
</body>

</html>

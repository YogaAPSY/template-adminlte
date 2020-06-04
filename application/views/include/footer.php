		<!-- Main Footer -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.0.5
			</div>
		</footer>

		<!-- REQUIRED SCRIPTS -->
		<!-- jQuery -->
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- overlayScrollbars -->
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url('assets/adminLTE/') ?>dist/js/adminlte.js"></script>

		<!-- OPTIONAL SCRIPTS -->
		<script src="<?= base_url('assets/adminLTE/') ?>dist/js/demo.js"></script>
		<!-- DataTables -->
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#example1').DataTable({
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					]
				});

			});
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<script>
			$(function() {
				$("#datepicker").datepicker({
					format: 'yyyy-mm-dd',
					orientation: 'bottom auto',
					autoclose: true,
					todayHighlight: true,
				});

			});
		</script>


		<!-- PAGE PLUGINS -->
		<!-- jQuery Mapael -->

		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.jshttps://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/raphael/raphael.min.js"></script>
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
		<!-- ChartJS -->
		<script src="<?= base_url('assets/adminLTE/') ?>plugins/chart.js/Chart.min.js"></script>

		<!-- PAGE SCRIPTS -->
		<script src="<?= base_url('assets/adminLTE/') ?>dist/js/pages/dashboard2.js"></script>

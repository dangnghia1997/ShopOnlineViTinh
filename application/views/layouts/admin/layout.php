<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('layouts/admin/head')?>

<body>
    <?php
        if(isset($edit_product))
        {
            $this->load->view($edit_product);
        }
    ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <?php $this->load->view('layouts/admin/preload')?>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php $this->load->view('layouts/admin/header_topbar')?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php $this->load->view('layouts/admin/left_sidebar')?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
			
			<?php
				if(isset($view))
				{
					$this->load->view($view);
				}
			?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php $this->load->view('layouts/admin/footer')?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/admin/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/admin/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/admin/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="<?php echo base_url()?>assets/admin/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url()?>assets/admin/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url()?>assets/admin/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/pages/chart/chart-page-init.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/ajax_pagination.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/ajax_select_category.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/ajax_product.js"></script>
</body>

</html>

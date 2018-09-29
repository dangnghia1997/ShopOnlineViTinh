<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('layouts/admin/head')?>

<body>
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
    
    <script>
	function load_categogy_data(page,$id_parent,$limit)
        {
			//console.log($('#limit').val());
            $.ajax({
            url: "<?php echo base_url();?>categogy/pagination/" + page,
            method:"POST",
			dataType:"json",
			data:{
				id_parent 	: $id_parent,
				limit		: $limit
			},
            success: function(data)
            {
                $('#data_cate_child').html(data.data_cate_child);
				$('#pagination_link').html(data.pagination_link);
				$('#total').html(data.total);
				var $from = ((parseInt(page) - 1) * parseInt($limit)) + 1;
				$('#from').html($from);
				var $to =($from + parseInt($limit) < parseInt(data.total)  ? $from + (parseInt($limit) -1)
					 : parseInt(data.total)) ;
				$('#to').html($to);
			},
			error:function(e)
			{
				console.log('Loi');
			}
            });
            
        }
    $(document).ready(function(){
        

        load_categogy_data(1,-1,5); 

        $(document).on("click", ".pagination li a.page-link1", function(event){
            event.preventDefault();
			var page = $(this).data("ci-pagination-page");
			var $id_parent = $('#main_categogy').val();
			var $limit = $('#limit').val();
            load_categogy_data(page,$id_parent,$limit);
        });

		$('#main_categogy').change(function(){
			//console.log(" loai : "+ $(this).val());
			var $limit = $('#limit').val();
			$id_parent = $(this).val();
			load_categogy_data(1,$id_parent,$limit);
		});

		$('#limit').change(function(){
			$limit = $(this).val();
			$id_parent = $('#main_categogy').val();
			load_categogy_data(1,$id_parent,$limit);
		});
        
    });
    </script>

</body>

</html>

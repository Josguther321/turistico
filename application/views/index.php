<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  $page_name       =	$this->session->userdata('page_name');
  $folder_name       =	$this->session->userdata('folder_name');
  $page_title       =	$this->session->userdata('page_title');
  $username       =	$this->session->userdata('username');
  $n       =	$this->session->userdata('admin_name');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Diego Velásquez - <?php echo $page_title;?>
  </title>
  <link href="<?php echo base_url();?>assets/images/logo.png" rel="shortcut icon">
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <?php include 'topcss.php'?>
</head>

<body class="menu-position-side menu-side-left full-screen">
	 <div class="all-wrapper solid-bg-all">
    	<div class="layout-w">
			<?php include 'navigation.php';?>
            <div class="content-w">
    		  	<?php include $folder_name.'/'.$page_name.'.php';?>
    	    </div>
    	<div class="display-type"></div>
    </div>
	<?php // include 'modal.php';?>
    <?php include 'scripts.php';?>

    <script type="text/javascript">
    function showAjaxModal(url) {
        jQuery('#exampleModal .modal-body').html(
            '<div style="text-align:center;margin-top:200px;"><img src="<?php echo base_url();?>assets/images/preloader.gif" /></div>'
        );
        jQuery('#exampleModal').modal('show', {
            backdrop: 'true'
        });
        $.ajax({
            url: url,
            success: function(response) {
                jQuery('#exampleModal .modal-body').html(response);
            }
        });
    }
    </script>

    <div aria-hidden="true" aria-labelledby="myLargeModalLabel" class="modal fade bd-example-modal-lg" role="dialog"
        tabindex="-1" id="exampleModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="margin-top:50px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php echo $this->session->userdata('mensaje'); ?>
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">
                            &times;</span></button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>

</body>

</html>

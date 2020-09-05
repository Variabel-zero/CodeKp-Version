<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $judul; ?></title>

	<link href="<?= base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="<?= base_url();?>asset/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<link href="<?= base_url();?>asset/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>

	
	<!-- isi -->
	<?php $this->load->view($isi); ?>

	<!-- end footer -->
	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url() ?>asset/jquery/jquery.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="<?= base_url() ?>asset/js2/sb-admin-2.min.js"></script>

	<script src="<?=base_url()?>asset/js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_url()?>asset/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">

		
	</script>

</body>

</html>

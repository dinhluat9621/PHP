<div class="content">
<?php 
	if (isset($_GET['quanly'])) {
		# code...
		$tam=$_GET['quanly'];
	}
	else{
		$tam='';
	}
	if ($tam=='quanlysp') {
		# code...
		include("controllers/main.php");
	}
?>
</div>
<div class="section-1">
	<?php
		if (isset($_GET['ac'])) {
		 	# code...
		 	$tam=$_GET['ac'];
		 } 
		 else{
		 	$tam='';
		 }
		 if ($tam=='them') {
		 	# code...
		 	include("views/them.php");
		 }
		 if ($tam=='sua') {
		 	# code...
		 	include("views/sua.php");
		 }
	 ?>
</div>
<div class="sectioin-2">
	<?php
		include("views/lietke.php");  
	?>
</div>
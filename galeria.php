<?php 
	include 'header.html';
?>


<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php 
		$folder = getcwd()."/img/galeria/";
		$num_img = 0;

		$files = glob($folder."*.jpg");
		$num_img = count($files);

		for ($i=1; $i <= $num_img; $i++) { 
			echo "<div class='container'>
					<div class='row py-1'>";
			for ($j=0; $j < 2; $j++) {
				if (file_exists($folder."img_".($i+$j).".jpg")) {
					echo "<div class='col-md-6 py-1'>
							<img  class='img-fluid' src='img/galeria/img_".($i+$j).".jpg' alt='error'>
						  </div>";
					}
			}
			$i += 1;
			echo "	</div>
				  </div>";
		}
	?>
</body>
</html>


<?php 
	include 'footer.html';
?>



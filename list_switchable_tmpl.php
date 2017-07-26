<?php 
	$mingiMuutuja = '';
	
		if($this->data['items'][3]['variables']['mingiMuutuja']['value'] == 'Luba broneerimise nupp') {
			$mingiMuutuja ='1'; 
		} ?>

		<?php 
?>

	<?php } ?>
	<?php if ($mingiMuutuja) { ?>
	<a href="#" class="button button-hidden m-t-defx2"><?php echo $data['itemHeading'];?></a>
	<script>
		//mingi script ,et peita itemHeading ära, kui selle sisu tuleb nagunii näitkes nupu sisse siaa
	</script>
	<?php } ?>
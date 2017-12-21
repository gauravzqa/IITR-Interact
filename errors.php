<?php if(count($errors)>0): ?>
	<div class="error">
		<?php 
		var_dump($errors);
		foreach ($errors as $error ){ ?>
			<p><?php echo $error; ?></p>
		<?php } ?>
	</div>
<?php endif ?>

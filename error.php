<?php if(count($error)>0): ?>
	<div style="border:2px solid red; color:red;" >
		<?php foreach($error as $er): ?>
			<center><p><?php echo $er; ?></p></center>
		<?php endforeach ?>
	</div>
<?php endif ?>
<h2> <?php echo $note['Note']['title']; ?> </h2>

<p><?php echo str_replace("\n", "<br/>", $note['Note']['content']); ?></p>

<small> 
		Ngày tạo: <?php echo date("d-m-Y H:i:s", strtotime($note['Note']['created'])); ?> <br/>
		Ngày tạo: <?php echo date("d-m-Y H:i:s", strtotime($note['Note']['modified'])); ?> <br/>
</small>

<div class="menu_actions">
	<?php echo $this->Html->link('Quay về trang chính', '/notes/index'); ?>
</div>
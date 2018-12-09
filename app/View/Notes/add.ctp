<h2>Thêm ghi chú</h2>

<?php 
	echo $this->Form->create();
	// echo $this->Form->input('title', array('label' => 'Tựa đề'));
	echo $this->Form->input('title', array('label' => '', 'placeholder'=>'Tựa đề của ghi chú'));
	// echo $this->Form->input('content', array('label' => 'Nội dung'));
	echo $this->Form->input('content', array('label' => '', 'placeholder' => 'Nội dung ghi chú'));
	echo $this->Form->end('Save');
?>

<div class="menu_actions">
	<?= $this->Html->link('Quay về trang chính', '/notes/index') ?>
</div>
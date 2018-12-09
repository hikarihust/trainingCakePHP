<h2>Sửa ghi chú</h2>

<?php 
	echo $this->Form->create('Note');
	// echo $this->Form->input('title', array('label' => 'Tựa đề'));
	echo $this->Form->input('id');
	echo $this->Form->input('title', array('label' => '', 'placeholder'=>'Tựa đề của ghi chú'));
	// echo $this->Form->input('content', array('label' => 'Nội dung'));
	echo $this->Form->input('content', array('label' => '', 'placeholder' => 'Nội dung ghi chú'));
	echo $this->Form->end('Update');
?>

<div class="menu_actions">
	<?= $this->Html->link('Quay về trang chính', '/notes/index') ?>
</div>
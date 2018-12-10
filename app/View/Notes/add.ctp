<h2>Thêm ghi chú</h2>
<div class="validation_errors">
	<?php 
		if(isset($errors)){
			foreach ($errors as $val1) {
				foreach ($val1 as $val2) {
					echo '<p>'.$val2.'</p>';
				}
			}
		}
	?>
</div>
<?php 
	echo $this->Form->create('Note');
	// echo $this->Form->input('title', array('label' => 'Tựa đề'));
	echo $this->Form->input('title', array('label' => '', 'placeholder'=>'Tựa đề của ghi chú', 'required' => false, 'error' => false));
	// echo $this->Form->input('content', array('label' => 'Nội dung'));
	echo $this->Form->input('content', array('label' => '', 'placeholder' => 'Nội dung ghi chú', 'required' => false, 'error' => false));
	echo $this->Form->end('Save');
?>

<div class="menu_actions">
	<?= $this->Html->link('Quay về trang chính', '/notes/index') ?>
</div>
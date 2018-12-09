<h2>Danh sách ghi chú</h2>
<ul>
 <?php foreach ($notes as $note):?>
 	<li>
 		<?= $this->Html->link($note['Note']['title'],'/notes/view/'.$note['Note']['id']) ?> | 
 		<?= $this->Html->link('Sửa', '/notes/edit/'.$note['Note']['id'], array('class' => 'inline_action' )) ?> |
 		<?= $this->Form->postlink('Xóa', '/notes/delete/'.$note['Note']['id'], array('class'=>'inline_action', 'confirm'=>'Bạn có chắc chắn muốn xóa ghi chú này hay không?')) ?>
 	</li>
 <?php endforeach; ?>
 
<div class="menu_actions">
	<?php echo $this->Html->link('Thêm ghi chú mới', '/notes/add'); ?>
</div>
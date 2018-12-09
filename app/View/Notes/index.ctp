<h2>Danh sách ghi chú</h2>
<ul>
 <?php foreach ($notes as $note):?>
 	<li>
 		<?= $this->Html->link($note['Note']['title'],'/notes/view/'.$note['Note']['id']) ?> | 
 		<?= $this->Html->link('Sửa', '/notes/edit/'.$note['Note']['id'], array('class' => 'inline_action' )) ?>
 	</li>
 <?php endforeach; ?>
 
<div class="menu_actions">
	<?php echo $this->Html->link('Thêm ghi chú mới', '/notes/add'); ?>
</div>
<h2>Danh sách ghi chú</h2>
<ul>
 <?php foreach ($notes as $note):?>
 	<li>
 		<?php  echo $this->Html->link($note['Note']['title'],'/notes/view/'.$note['Note']['id']);?>
 	</li>
 <?php endforeach; ?>
 
<div class="menu_actions">
	<?php echo $this->Html->link('Thêm ghi chú mới', '/notes/add'); ?>
</div>
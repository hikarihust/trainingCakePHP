<meta charset="UTF-8">

<ul>
<?php foreach ($notes as $note): ?>
	<li> <?php echo $note['Note']['title']; ?></li>
<?php endforeach ?>
</ul>
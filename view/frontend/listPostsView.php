<?php ob_start(); ?>

<?php
while ($data = $posts->fetch()) {
    ?>



<div class="container_listPost">
<a href="index.php?action=post&id=<?= $data['id'] ?>">
	<h2 class="post-title"><?= htmlspecialchars($data['title']) ?></h2>
	<h3 class="post-subtitle"><?= nl2br($data['content']) ?></h3>
</a>
<p class="post-meta ">
						écrit le <?= $data['creation_date_fr'] ?>
					</p>
<hr>
</div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


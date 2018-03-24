<?php ob_start(); ?>

<?php
while ($data = $posts->fetch()) {
    ?>



<div class="container_listPost">

	<a href="index.php?action=post&id= <?= $data['id'] ?>">

		<h2 class="post-title"><?= htmlspecialchars($data['title']) ?></h2>
		<br>
		
		<class="post-subtitle"><?php
    // limitation du nombre de caractères dans la page d'acceuil
    if (strlen($data['content']) > 50) {
        $data['content'] = substr($data['content'], 0, 600);
        $dernier_mot = strrpos($data['content'], "");
        echo $data['content'] = substr($data['content'], 0, $dernier_mot);
    }
    ?></class>
	</a>
	<p class="post-meta ">
						publié le <?= $data['creation_date_fr']?>
	</p>
	<hr>

</div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


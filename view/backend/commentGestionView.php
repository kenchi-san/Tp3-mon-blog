<?php ob_start(); ?>

<tbody>
	<tr>
		<td align="center"><a class="btn btn-default"
			href="index.php?action=editshow&id=<?= $_GET['id']; ?>"><em
				class="fa fa-pencil"></em></a> <a class="btn btn-danger"
			href="index.php?action=postSupression&id=<?=$_GET['id'];?>"><em
				class="fa fa-trash"></em></a></td>
		<td class="hidden-xs"><?= $post['id']?> </td>
		<td class="hidden-xs"><em>le <?= $post['creation_date_fr'] ?></em></td>
		<td><?=  $post['title']?></td>
		<td><?= nl2br($post['content'])?></td>
	</tr>
</tbody>

<?php $adminComment = ob_get_clean(); ?>


<?php

ob_start();
while ($comment = $comments->fetch(PDO::FETCH_ASSOC)) {
    
    ?>

<tbody>
	<tr>
		<td align="center"><a class="btn btn-default"
			href="index.php?action=editShowComment&id=<?= $_GET['id']=$comment['id']; ?>"><em
				class="fa fa-pencil"></em></a> <a class="btn btn-danger"
			href="index.php?action=commentSupression&id=<?= $_GET['id']=$comment['id'];?>"><em
				class="fa fa-trash"></em></a></td>
		<td class="hidden-xs"><?= $comment['id']?></td>
		<td class="hidden-xs"><em>le <?= $comment['comment_date_fr'] ?></em></td>
		<td><?= $comment['author'] ?></td>
		<td><?= nl2br($comment['comment']) ?></td>
	</tr>
</tbody>
<?php
}
?>

<?php $adminall = ob_get_clean(); ?>

<?php require('templateCommentGestionView.php'); ?>






<?php ob_start(); ?>
<?php
while ( $data=$listcourent->fetch())
{
?>

<tbody>
<tr>
<td align="center">
<a class="btn btn-default" href="index.php?action=editshow&id=<?= $data['id']; ?>"><em class="fa fa-pencil"></em></a>
<a class="btn btn-danger" href="index.php?action=postSupression&id=<?=$data['id'];?>"><em class="fa fa-trash"></em></a>
</td>
<td class="hidden-xs"><?= $data['id']?></td>
<td><?= $data['title']?></td>
<td><?= $data['content']?></td>
</tr>
</tbody>

<?php
}
$listcourent->closeCursor();
?>
<?php $adminBillet = ob_get_clean(); ?>
<?php require('templateGestionBillet.php'); ?>



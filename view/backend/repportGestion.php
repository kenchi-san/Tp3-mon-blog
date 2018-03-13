<?php ob_start(); ?>
<?php
while ($repports = $commentReport->fetch(PDO::FETCH_ASSOC)) {
   
    ?>
    
<tbody>
<tr>
<td align="center">

<a class="btn btn-default" href="index.php?action=comeBackComment&id=<?= $repports['id']; ?>"><em class="fa fa-circle"></em></a>
<a class="btn btn-default" href="index.php?action=editShowComment&id=<?= $_GET['id']=$repports['id']; ?>"><em class="fa fa-pencil"></em></a>
<a class="btn btn-danger" href="index.php?action=commentSupression&id=<?= $_GET['id']=$repports['id'];?>"><em class="fa fa-trash"></em></a>
</td>
<td class="hidden-xs"><?= $repports['id']?></td>
<td class="hidden-xs"><em>le <?= $repports['comment_date_fr'] ?></em></td>
<td><?= $repports['author'] ?></td>
 <td><?= nl2br($repports['comment']) ?></td>
</tr>
</tbody>
<?php
}
?>
<?php $adminrepport = ob_get_clean(); ?>

<?php require('templateRepportGestionView.php'); ?>

<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
 
<?php
while ($data = $posts->fetch())
{
?>


<div class="col-sm-12 col-md-6 col-lg-4">
  <div class="card flex-md-row mb-4 box-shadow h-md-250">
    <div class="text-into-box">
      <div class="card-body d-flex flex-column align-items-start">
      
        <strong class="d-inline-block mb-2 text-primary"><?= htmlspecialchars($data['title']) ?></strong>
          <div class="mb-1 text-muted"><em>le <?= $data['creation_date_fr'] ?></em>
          </div>
          <p class="card-text mb-auto"> <?= nl2br($data['content']) ?></p>
          <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">lire la suite</a></em>
      </div>
    </div>   
  </div>
</div>

<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


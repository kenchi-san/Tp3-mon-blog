<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>

<div class=container>
   
    <p><a href="index.php">Retour à la liste des billets</a></p>
</div>
<span class="border border-dark">
<div class="col">    
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">édition</button>
  <button type="button" class="btn btn-secondary">supréssion</button>
</div>
            <h2>My Posts:</h2>
            <p>
          
            <h3>
                <?= $post['title'] ?><p>     
                <em>le <?= $post['creation_date_fr'] ?></em>
            </h3>
            
            <p>
            
            <?= nl2br($post['content']) ?>
            </div>
            </p>
           
</div>
</span>

<h2>Commentaires:</h2>

<?php
while ($comment = $comments->fetch())
{
?>
    <p><strong><?= ($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br($comment['comment']) ?></p>
<?php

}
?>
<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>



<?php ob_start(); ?>
<?php
while ($data = $posts->fetch())
{
?>
<div class="container">
<div class="row">

<p></p>


<div class="col-md-10 col-md-offset-1">

<div class="panel panel-default panel-table">
<div class="panel-heading">
<div class="row">
<div class="col col-xs-6">
<h3 class="panel-title">Paneau de gestion des billets</h3>
</div>
<div class="col col-xs-6 text-right">
<a href="additionalPostView.php"><button type="button" class="btn btn-sm btn-primary btn-create" >nouvelle article</button></a>
</div>
</div>
</div>
<div class="panel-body">
<table class="table table-striped table-bordered table-list">
<thead>
<tr>
<th><em class="fa fa-cog"></em></th>
<th class="hidden-xs">ID</th>
<th>titre</th>
<th>contenu</th>
</tr>
</thead>
<tbody>
<tr>
<td align="center">
<a class="btn btn-default"><em class="fa fa-pencil"></em></a>
<a class="btn btn-danger"><em class="fa fa-trash"></em></a>
</td>
<td class="hidden-xs"><?= $data['id']?></td>
<td><?= $data['title']?></td>
<td><?= $data['content']?></td>
</tr>
</tbody>
</table>

</div>
<div class="panel-footer">
<div class="row">
<div class="col col-xs-4">Page 1 of 5
</div>
<div class="col col-xs-8">
<ul class="pagination hidden-xs pull-right">
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
</ul>
<ul class="pagination visible-xs pull-right">
<li><a href="#">«</a></li>
<li><a href="#">»</a></li>
</ul>
</div>
</div>
</div>
</div>

</div></div></div>
<?php
}
$posts->closeCursor();
?>
<?php $adminBillet = ob_get_clean(); ?>
<?php require('templateGestionBillet.php'); ?>


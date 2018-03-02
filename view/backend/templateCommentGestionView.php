<link
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
	rel="stylesheet" id="bootstrap-css">
<script
	src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"
	rel='stylesheet' type='text/css'>

<div class="container">
	<div class="row">

		<p></p>


		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default panel-table">
				<div class="panel-heading">
					<div class="row">
						<div class="col col-xs-6">
							<h3 class="panel-title">Paneau de gestion des commentaires</h3>
						<a href=" index.php?action=gestionPosts">Retour a la page de Modération: </a>
						</div>
						<div class="col col-xs-6 text-right">
							<!--  <a href="index.php?action=addComment"><button
									type="button" class="btn btn-sm btn-primary btn-create">créer un commentaire</button></a>-->
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered table-list">
						<thead>
							<tr>
								<th><em class="fa fa-cog"></em></th>
								<th class="hidden-xs">ID</th>
								<th>date de céation</th>
								<th>titre</th>
								<th>contenu</th>
								
							</tr>
						</thead>
<?php echo $adminComment;?>
</table>
<div class="panel-body">
					<table class="table table-striped table-bordered table-list">
						<thead>
							<tr>
								<th><em class="fa fa-cog"></em></th>
								<th class="hidden-xs">ID</th>
								<th>date de céation</th>
								<th>auteur</th>
								<th>commentaires</th>
								
							</tr>
						</thead>
<?php echo $adminall;?>
				</div>
				
			</div>

		</div>
	</div>
</div>

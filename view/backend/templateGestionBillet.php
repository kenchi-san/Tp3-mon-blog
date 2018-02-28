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
							<h3 class="panel-title">Paneau de gestion des billets</h3>
						
						</div>
						<div class="col col-xs-6 text-right">
							<a href="view/backend/additionalPostView.php"><button
									type="button" class="btn btn-sm btn-primary btn-create">nouvelle
									article</button></a>
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
<?php echo $adminBillet;?>
</table>

				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col col-xs-4">Page 1 of 5</div>
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

		</div>
	</div>
</div>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>le blog de l'écrivain</title>

<!-- Bootstrap core CSS -->
<link href="public/vendor/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="public/vendor/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
<link
	href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="public/css/clean-blog.min.css" rel="stylesheet">
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
          
          tinymce.init({
            selector: '#comment'
          });
        </script>

<!-- <link rel="stylesheet" href="public/css/css_blog.css"> -->
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top"
		id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="index.php">Page d'acceuil</a>
			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu <i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">						
						<?php 
						if ( MembersManager::checkIfSessionExists() == true ) {
						    ?>
						    <a href="index.php?action=gestionPosts">
    							Administration
    						</a>
						    <?php 
						} else {
						    ?>
						    <a href="index.php?action=displaylogin">
    							Se connecter
    						</a>
						    <?php
						}
						?>						
					</li>					 
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Header -->
	<header class="masthead"
		style="background-image: url('public/img/index-img.jpg')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1>Mon blog</h1>
						<span class="subheading">La visite de l'imaginaire</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content -->
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="post-preview">
				<?php echo $content;?>
					
				</div>


			</div>
		</div>
	</div>

	<hr>


	<!-- Bootstrap core JavaScript -->
	<script src="public/vendor/jquery/jquery.min.js"></script>
	<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Custom scripts for this template -->
	<script src="public/js/clean-blog.min.js"></script>

</body>
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<ul class="list-inline text-center">
					
				</ul>
				<p class="copyright text-muted">Copyright &copy; Merveilleux site 2018</p>
			</div>
		</div>
	</div>
</footer>



</html>
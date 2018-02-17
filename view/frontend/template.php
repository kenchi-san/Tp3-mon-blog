<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title><?= $title ?></title>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	crossorigin="anonymous"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	crossorigin="anonymous"></script>

<link rel="stylesheet"
	href="public/libs/bootstrap/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
	crossorigin="anonymous"></script>

<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
          tinymce.init({
            selector: '#content'
          });
          tinymce.init({
            selector: '#comment'
          });
        </script>

<link rel="stylesheet" href="public/css/css_blog.css">

</head>

<body>

	<div class="container">
		<header class="blog-header py-3">
			<div
				class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
					<a class="text-muted" href="#"></a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a class="text-muted" href="#"> <svg
							xmlns="http://www.w3.org/2000/svg" width="20" height="20"
							viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							class="mx-3">
							<circle cx="10.5" cy="10.5" r="7.5"></circle>
							<line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
					</a> <a class="btn btn-sm btn-outline-secondary"
						href="index.php?action=displaylogin">se connecter</a>
				</div>
			</div>
		</header>
	</div>

	<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
		<div class="col-md-6 px-0">
			<h1 class="display-4 font-italic">Le blog de l'écrivain</h1>
			<p class="lead my-3">Voici le lieu où vous pourrez enfi lire mes
				histoires.</p>
		</div>
	</div>

	<div class="row mb-2">
            <?php echo $content; ?>
          </div>




	<form action="index.php?action=add_new_content" method="post">
		<div>
			<label for="title">titre</label><br /> <input type="text" id="title"
				name="title" />
		</div>
		<div>
			<label for="content">article</label><br />
			<textarea id="content" name="content"></textarea>
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>






	<footer class="blog-footer">
		<p>
			<a href="#">Back to top</a>
		</p>
	</footer>

</body>
</html>
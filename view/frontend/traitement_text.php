<!DOCTYPE html>
<html>
<head>
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
  tinymce.init({
    selector: '#contents'
  });
  </script>
</head>

<body>
	<h1>Edition de l'article</h1>

	<form action="index.php?action=editPost&id=<?= $_GET['id']?> " method="post">
		<div>
			<label for="title">titre</label><br /> <input type="text" id="title"
				name="title" value="<?= $currentPost['title'] ?>">
		</div>
		<div>
			<label for="content">article</label><br />
			<textarea id="contents" name="contents"><?= $currentPost['content'] ?></textarea>
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>

</body>
</html>

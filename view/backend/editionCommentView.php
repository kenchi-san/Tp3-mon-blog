<!DOCTYPE html>
<html>
<head>
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
  tinymce.init({
    selector: '#comment'
  });
  </script>
</head>

<body>
	<h1>Edition du commentaire</h1>

	<form action="index.php?action=commentEdition&id=<?=$_GET['id']?>"
		method="post">
		<div>
			<label for="author">auteur</label><br /> <input type="text" id="author"
				name="author" value="<?= $curentCom['author'] ?>">
		</div>
		<div>
			<label for="comment">article</label><br />
			<textarea id="comment" name="comment"> <?= $curentCom['comment'] ?></textarea>
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>

</body>
</html>

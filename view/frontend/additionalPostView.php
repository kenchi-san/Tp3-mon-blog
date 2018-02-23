<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

<script>
          tinymce.init({
            selector: '#content'
          });
</script>

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
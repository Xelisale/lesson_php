<!DOCTYPE html>
<html>
<head>
	<title>Lesson 5</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
</head>
<body>
	<pre>
		<a href="print_image.php">Страница просмотра загруженных изображений</a>
	</pre>
	<div>
		<p id="message"></p>
	</div>
	<form  id="frm_file" enctype="multipart/form-data">
		<div>
			<input type="file" name="myfile[]" id="myfile" required multiple="true" accept="image/png, image/jpeg"/>
			<input type="button" name="upload" value="Загрузить"/>
		</div>
	</form>
</body>
</html>

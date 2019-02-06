<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/function.php');

$files = \FileMetaData\abcFile();

if (isset($_POST['delete'])) {

	foreach ($_POST as $value) {
	 	if ($value !== 'Delete') {
	 		unlink('upload/' . $value);
	 	}
	}
}	
?>

<pre>
	<a href="index.php">Станица добавления картинки</a>
</pre>
<span>
	<p>Галерея:</p>
</span>
<form method="POST" action="">

	<?php for ($i = 0; $i < count($files); $i++) :
		$fileData = stat('upload/' . $files[$i]);
		$time =   date("d.m.Y", $fileData["mtime"]);
	?>	
	
		<div>
			<pre>
				<img src="<?= 'upload/' . $files[$i]; ?>" width="150px" heght="150px">
				<span><?= $files[$i];?></span>
				<span><?= \FileMetaData\sizeFile('upload/' . $files[$i]);?></span>
				<span><?= $time?></span>
				<input type="checkbox" name="<?= $i; ?>" value="<?= $files[$i];?>">
			</pre>
		</div>
	<?php endfor; ?>
	<input type="submit" name="delete" value="Delete">
</form>

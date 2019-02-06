<?php

$mime_types = [
	'jpeg' => 'image/jpeg',
	'png' => 'image/png'
];

if (isset($_FILES['myfile'])) {
	
	$uploadPathFile = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
	$countFile = count($_FILES['myfile']['tmp_name']);	

	if ($countFile <= 5 ) {

		for ($i = 0; $i < $countFile; $i++) {

			if (!empty($_FILES['myfile']['error'][$i]))	{

				echo "Произошла ошибка на файле  " . $_FILES['myfile']['name'][$i];

			} elseif (!empty($_FILES['myfile']['error'][$i])) {

				echo "Произошла ошибка";

			} elseif ($_FILES['myfile']['size'][$i] > 5 * (pow(1024, 2))) {

				echo "Превышен размер загружаемого файла";

			} else {

				foreach ($mime_types as $key => $value) {

					if ($_FILES['myfile']['type'][$i] == $value) {

						move_uploaded_file($_FILES['myfile']['tmp_name'][$i], $uploadPathFile . $_FILES['myfile']['name'][$i]);
						echo "Загружен файл  " . $_FILES['myfile']['name'][$i];
						?>
						<br>
						<?php
						break;

					} 
				}
		
			}
		}		 

	} else {
		var_dump($_FILES);

		echo "Не выбирайте более 5 файлов для загрузки";
	}	
} else {

	echo "Выберите хотя бы 1 файл";
}
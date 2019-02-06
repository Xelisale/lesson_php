<?php
namespace FileMetaData;

function sizeFile ($filePath)
{
	$size = filesize($filePath);

	if ($size < (1024 * 10)) {
		
		return round($size, 2) . 'b';

	} elseif ($size > 1024 * 10 && $size < pow(1024, 2)) {

		return round(($size / 1024), 2) . 'kb';

	} else {

		return round($size / pow(1024, 2)) . 'mb';
	}
}

function abcFile()
{
	$path = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

	$files = scandir($path);
	$files = array_slice($files, 2);
	asort($files);

	return $files;
}

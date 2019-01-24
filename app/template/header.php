<?php
$menu = require_once $_SERVER['DOCUMENT_ROOT'] . ('/main_menu.php');
include $_SERVER['DOCUMENT_ROOT'] . ('/app/function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="styles.css" rel="stylesheet" />
		<link href="new_style.css" rel="stylesheet" />
		<title>Project - ведение списков</title>
	</head>
	<body>
		<div class="header">
	    	<div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project" /></div>
	        <div style="clear: both"></div>
    	</div>
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
            	<td class="left-collum-index">
					<div class="project-folders-menu">
						<ul class="project-folders-v">			
							<?php 
							foreach (Menu\printMenu($menu, 'sort') as $key => $value) :
							?>
								<li class="project-folders-v-active my-text">
									<a  href="<?= (!empty($_GET['page'])) ? ('?' . 'page=' . $value['title']) : ('route/' . '?' . 'page=' . $value['title']);?>"><?= $value['title'];?></a>
								</li>
							<?php endforeach;?>
						</ul>
					</div>	
					</br>
					<h1><?= Menu\title();?></h1>
					<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				</td>
		
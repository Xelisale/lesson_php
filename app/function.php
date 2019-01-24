<?php
namespace Menu;

function printMenu($arMenu, $abc = 0)
{
	$sort = array_column($arMenu, 'sort');

	if ($abc == 'sort') {

		array_multisort($sort, SORT_ASC, $arMenu);
		return $arMenu;
	}

	else {

		array_column($arMenu['sort'], SORT_DESC);
		return $arMenu;
	}
}

function title()
{
	if (strlen($_GET['page']) < 12) {

		return ($_GET['page']);

	} else {

		(substr($_GET['page'], 0, 12) . '...');
	}
	
}
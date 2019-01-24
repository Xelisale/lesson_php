<?php
function check($arLogin, $arPassword, $arPost)
{
	foreach ($arLogin as $key => $value) {

		if ($arPost['login'] == $value && $arPost['password'] == $arPassword[$key]) {
			
			return true;
		}	
	}

}

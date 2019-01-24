<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . ('/app/template/header.php');
?>
				<?php if ($_GET['login'] == 'yes') :?>
	                <td class="right-collum-index">
				
						<div class="project-folders-menu">
							<ul class="project-folders-v">
							<li class="project-folders-v-active"><span>Авторизация</span></li>
							<li><a href="#">Регистрация</a></li>
							<li><a href="#">Забыли пароль?</a></li>
							</ul>
						<div style="clear: both;"></div>
						</div>
						<div class="index-auth">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">

								<?php if (!empty($_POST['login'])) {

									$arLogin = include $_SERVER['DOCUMENT_ROOT'] . ('/include/login.php');
									$arPassw = include $_SERVER['DOCUMENT_ROOT'] . ('/include/password.php');

									include $_SERVER['DOCUMENT_ROOT'] . ('/include/controller.php');

									$result = check($arLogin, $arPassw, $_POST);

									if ($result) {

										include $_SERVER['DOCUMENT_ROOT'] . ('/include/success.php');
									
									} else {

										echo "Неверный логин или пароль";
									}
								}?>
									<form method="POST" action="index.php?login=yes" >

										<tr>
											<td class="iat">Ваш e-mail: <br /> <input id="login_id" size="30" value="<?= $_POST['login'] ? htmlspecialchars($_POST['login']) : ' '; ?>" name="login" /></td>
										</tr>
										<tr>
											<td class="iat">Ваш пароль: <br /> <input id="login_id" size="30" value="<?=  $_POST['password'] ? htmlspecialchars($_POST['password']) : ''; ?>" name="password" /></td>
										</tr>
										<tr>
											<td><input type="submit" value="Войти" /></td>
										</tr>
									</form>
									
							</table>
						</div>
					
					</td>
				<?php endif ?>
            </tr>
        </table>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . ('/app/template/footer.php');
?>
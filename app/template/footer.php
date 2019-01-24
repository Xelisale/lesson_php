		<div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>
		<div class="footer footer_text">
			<ul>
				<?php
				foreach (Menu\printMenu($menu, 'sort') as $key => $value) :
				?>
					<li class="project-folders-v-active my-text">
						<a  href="<?= (!empty($_GET['page'])) ? ('?' . 'page=' . $value['title']) : ('route/' . '?' . 'page=' . $value['title']);?>"><?= $value['title'];?></a>
					</li>
				<?php endforeach; ?>
				</div>
			</ul>
		</div>
	</body>
</html>
<div class="grid-container grid-x">
	<h3 class="small-12 grid-padding-y">Категории</h3>
	<table>
		<tbody>
    <?php foreach ($categories as $category): ?>
			<tr>
				<td>
            <?php echo $category->getname() ?>
				</td>
				<td>
					<a href="<?php echo $category->getid() . '/showCategory' ?>">Просмотр</a>
				</td>
				<td>
					<a href="<?php echo $category->getid() . '/editCategory'; ?>">Редактировать</a>
				</td>
			</tr>
    <?php endforeach; ?>
		</tbody>
	</table>

	<a class="alert button float-left" href="<?php echo url_for('@homepage') ?>">Назад</a>
</div>
<div class="clear"></div>



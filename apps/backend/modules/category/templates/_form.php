<form
	class="grid-container"
	action="
	  <?php
	  $path1 = 'category/' . ($form->getObject()->isNew() ? 'create' : 'updateCategory');
   	$path2 = (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getid() : '');
    echo url_for($path1 . $path2);
	  ?>"
	method="post" enctype="multipart/form-data">

    <?php if (!$form->getObject()->isNew()): ?>
			<input type="hidden" name="sf_method" value="put"/>
    <?php endif; ?>
	<div class="grid-x">
		<h3>Редактирование категории</h3>
		<table>
			<tfoot>
			<tr>
				<td colspan="2">
            <?php if (!$form->getObject()->isNew()): ?>
							&nbsp;<?php echo link_to('Удалить', 'category/delete?id=' . $form->getObject()->getid(), array('class' => "secondary button", 'method' => 'delete', 'confirm' => 'Are you sure?')) ?>
            <?php endif; ?>
					<input type="submit" class="success button float-right" value="Сохранить"/>
					<a class="alert button float-left" href="<?php echo url_for("@indexCategory") ?>">Назад</a>
				</td>
			</tr>
			</tfoot>
			<tbody>
      <?php echo $form ?>
			<tr>
				<th>
					<label for="photo">Фотография</label>
				</th>
				<td>
					<input type="file" id="photo" name="category_photo">
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</form>

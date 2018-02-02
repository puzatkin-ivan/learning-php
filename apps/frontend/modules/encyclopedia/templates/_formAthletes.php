<form
	action="<?php echo url_for('athletes/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getid() : '')) ?>"
	method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
			<input type="hidden" name="sf_method" value="put"/>
    <?php endif; ?>
	<div class="grid-x">
		<table>
			<thead>
			<tr>
				<h3 class="small-12">Информация о новом атлете</h3>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<td colspan="2">
            <?php if (!$form->getObject()->isNew()): ?>
	            &nbsp;<?php echo link_to('Delete', 'athletes/delete?id=' . $form->getObject()->get(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
            <?php endif; ?>
					<input type="submit" class="success button float-right" value="Сохранить"/>
					<a class="alert button float-left" href="<?php echo url_for('athletes/indexAthletes') ?>">Назад</a>
				</td>
			</tr>
			</tfoot>
			<tbody>
      <?php echo $form ?>
			</tbody>
		</table>
	</div>
</form>

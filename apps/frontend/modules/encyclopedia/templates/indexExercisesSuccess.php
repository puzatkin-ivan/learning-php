<div class="grid-container grid-x">
	<table>
		<thead>
		<tr>
			<h3 class="small-12 grid-padding-y">Список упражнения</h3>
		</tr>
		</thead>
		<tbody>
    <?php foreach ($exercises as $exercise): ?>
			<tr>
				<td><?php
            $name = $exercise->getname();
            $access = 'exercises/' . $exercise->getid();
            echo link_to($name, $access);
            ?>
				</td>
			</tr>
    <?php endforeach; ?>
		</tbody>
		<tfoot>
		<tr>
			<td colspan="2">
				<a class="button float-left" href="<?php echo url_for('@homepage') ?>">Назад</a>
				<a class="success button float-right" href="<?php echo url_for('@create_record_about_exercise') ?>">Новая запись</a>
			</td>
		</tr>
	</table>
</div>
<div class="clear"></div>


<form action="<?php echo url_for('@updateParameters')?>" method="post" enctype="multipart/form-data">
	<div class="grid-container">
		<h3>Настройки -> Экран</h3>

		<table>
			<tbody>
			<tr>
				<th>Задний фон Заголовка</th>
				<td>
					<input type="file" name="header_photo">
				</td>
			</tr>
			<tr>
				<th>Заголовок</th>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<th>Задний фон "подвала"</th>
				<td>
					<input type="file" name="footer_photo">
				</td>
			</tr>
			</tbody>
			<tfoot>
			  <tr>
				  <td>
					  <a class="alert button" href="<?php echo url_for('@settingsFrontedPage')?>">Назад</a>
				  </td>
				  <td>
					  <input class="success button float-right" type="submit" value="Сохранить">
				  </td>
			  </tr>
			</tfoot>
		</table>
	</div>
</form>
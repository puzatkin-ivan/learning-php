<div class="grid-container">
	<table>
		<tbody>
		<tr>
			<th>Название:</th>
			<td><?php echo $category->getname() ?></td>
		</tr>
		</tbody>
	</table>

    <?php
    $name = "Назад";
    $access = url_for("@indexCategory");
    echo link_to($name, $access, array(
        "class" => "alert button float-left"
    )); ?>
</div>


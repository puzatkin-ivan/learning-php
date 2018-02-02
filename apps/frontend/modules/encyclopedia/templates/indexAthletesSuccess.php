
<div class="grid-container grid-x">
    <table>
        <thead>
        <tr>
	        <h3 class="small-12 grid-padding-y">Тяжелоатлеты России</h3>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($athletes as $athlete): ?>
            <tr>
                <td>
                    <?php
                    $name = $athlete->getfirst_name() . ' ' . $athlete->getsecond_name();
                    $access = 'athletes/' . $athlete->getid();
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
			      <a class="success button float-right" href="<?php echo url_for('@create_record_about_athlete') ?>">Новая запись</a>
		      </td>
	      </tr>
	    </tfoot>
    </table>

</div>
<div class="clear"></div>



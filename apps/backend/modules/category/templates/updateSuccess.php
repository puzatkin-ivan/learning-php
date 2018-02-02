<div class="grid-container">
    <h3>Изменения сохранены успешно</h3>
    <?php
    $name = "На главную страницу";
    $access = url_for("@homepage");
    echo link_to($name, $access, array(
        "class" => "alert button float-left"
    )); ?>
</div>

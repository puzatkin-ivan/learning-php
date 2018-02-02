

<div class="grid-x grid-padding-y" style="margin-top: 50px;">
  <div class="callout float-center small-12">

    <img class="float-center" src="<?php echo '/images/' . 'e' . $exercise->id . '.jpg'?>" alt="photo by athlete">
    <table>
      <tbody>
      <tr>
        <td><?php echo $exercise->getname() ?></td>
      </tr>
      <tr>
        <td><?php echo $exercise->gettype() ?></td>
      </tr>
      <tr>
        <td> <?php echo $exercise->getdescription() ?></td>
      </tr>
      </tbody>
    </table>
  </div>

  <a class="alert button " href="<?php echo url_for('exercises/indexExercises') ?>">Back</a>
</div>
<div class="clear"></div>


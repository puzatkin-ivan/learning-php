
<div class="grid-x grid-padding-y show_description">
  <div class="callout">
    <img class="float-center" src="<?php echo '/images/' . $athletes->id . '.jpg' ?>" alt="photo by athlete">
    <table>
      <tbody>
      <tr>
        <td><?php echo $athletes->getfirst_name() . ' '  . $athletes->getsecond_name() ?></td>
      </tr>
      <tr>
        <td><?php echo $athletes->getrank() ?></td>
      </tr>
      <tr>
        <td><?php echo $athletes->getbiography() ?></td>
      </tr>
      </tbody>
    </table>
  </div>

  <a class="alert button round" href="<?php echo url_for("athletes/indexAthletes") ?>">Back</a>
</div>


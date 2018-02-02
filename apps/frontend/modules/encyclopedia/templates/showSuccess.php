<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $categories->getid() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $categories->getname() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('encyclopedia/edit?id='.$categories->get()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('encyclopedia/index') ?>">List</a>

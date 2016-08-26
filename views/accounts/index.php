<!-- Vista index-->
<div class="row">
  <div class="col-ms-12">
<table class="highlight responsive-table" border="2">
  <h2>Listado de cuentas</h2>
  <div class="col-md-1">
        <a href="<?php echo APP_URL; ?>accounts/add">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>
  <thead>
    <tr>
        <th>ID</th>
		    <th>ID del usuario</th>
		    <th>Nombre</th>
		    <th>Action</th>
		</tr>
  </thead>
  <tbody>
<?php foreach ($accounts as $account ): ?>
    <tr>
        <td><strong><?php echo $account['id']; ?></strong></td>
		<td><?php echo $account['user_id']; ?></td>
		<td><?php echo $account['name']; ?></td>
		<td>
          <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Editar</a>
        	<a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Eliminar</a>
    </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<br>
</div>
</div>

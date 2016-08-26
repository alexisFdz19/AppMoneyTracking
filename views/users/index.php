<h2>Listado de Usuarios</h2>

<div class="col-md-1">
        <a href="<?php echo APP_URL; ?>users/add">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>

<table border="2">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Rol</th>
		<th>Action</th>
	</tr>
<?php foreach ($users as $user): ?> 
	<tr>
		<td><strong><?php echo $user["id"]; ?></strong></td>
		<td><?php echo $user["username"]; ?></td>
		<td><?php echo $user["rol"]; ?></td>
		<td>
			<a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>">Edit</a>
			<a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user["id"]; ?>">Delete</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<br>

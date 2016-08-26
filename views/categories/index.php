<!-- Vista Index-->
<div class="row">
<div class="col s12 m12 l12">
<table border="2">
  <h2>Listado de Categorias</h2>
  <div class="col-md-1">
        <a href="<?php echo APP_URL; ?>categories/add">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>
  <thead>
    <tr>
        <th>Id</th>
		    <th>Nombre</th>
		    <th>Action</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($categories as $category ): ?>
    <tr>
      <td><strong><?php echo $category['id']; ?></strong></td>
      <td><?php echo $category['name']; ?></td>
      <td>
	    <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category['id']; ?>">Editar</a>
		  <a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">Eliminar</a>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>
<br>
</div>

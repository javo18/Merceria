<h1>listado de productos</h1>
<center><a href="http://192.168.1.65/merceria/Products/add">agregar</a></center> 
<table>
<tr>
<th>
    Id del producto
    </th>
<th>
    Nombre del producto
    
    </th>
    
<th>
    Precio de producto por unidad
    
    </th>

    <th>
    Cantidad existente de productos
    </th>

    <th>
    Descripcion del producto
    </th>
    
    <th>
    accion
    </th>

    </tr>
<?php foreach ($productos as $productos): ?>
<tr>
    <td><?php echo ($productos-> ID_producto); ?>  </td>
    <td><?php echo ($productos-> nombre_producto); ?>  </td>
    <td><?php echo ($productos-> precio_producto); ?>  </td>
    <td><?php echo ($productos-> cantidad_producto_existente); ?>  </td>
    <td><?php echo ($productos-> descripcion_producto); ?>  </td>
     <td><?php echo $this ->Form->postLink("Delete", 
    ['action' => 'delete' , $productos -> ID_producto], 
    ['confirm' => 'Are you sure?']); ?> </td>
    <td>
    <?php echo $this->Html->link('Edit' , ['action' => 'edit' , $productos ->ID_producto]) ?>
    </td>
</tr>


<?php endforeach; ?>

</table>
<a href="http://192.168.1.65/merceria/inicio.html">Home</a>


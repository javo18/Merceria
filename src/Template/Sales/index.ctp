<h1>listado de ventas </h1>
<center><a href="http://192.168.1.65/merceria/Sales/add">agregar</a></center> 
<table>
<tr>
<th>
    Id del venta
    </th>
<th>
    Nombre del producto
    
    </th>
    
<th>
   cantidad del producto
    
    </th>

    <th>
    precio del producto
    </th>

    <th>
    Total de la venta
    </th>

     <th>
     fecha de la venta
    </th>

     <th>
    id de vendedor
    </th>
    
    
    
    <th>
    accion
    </th>

    </tr>
<?php foreach ($ventas as $ventas): ?>
<tr>
    <td><?php echo ($ventas->   id_venta); ?>  </td>
    <td><?php echo ($ventas-> nombre_producto); ?>  </td>
    <td><?php echo ($ventas-> cantidad_producto); ?>  </td>
    <td><?php echo ($ventas-> precio_producto); ?>  </td>
    <td><?php echo ($ventas-> total_venta); ?>  </td>
    <td><?php echo ($ventas-> fecha_venta); ?>  </td>
    <td><?php echo ($ventas-> id_vendedor); ?>  </td>
     <td><?php echo $this ->Form->postLink("Delete", 
    ['action' => 'delete' , $ventas ->  id_venta], 
    ['confirm' => 'Are you sure?']); ?> </td>
    <td>
    <?php echo $this->Html->link('Edit' , ['action' => 'edit' , $ventas ->  id_venta]) ?>

    </td>
    <td>
    
    </td>
</tr>


<?php endforeach; ?>

</table>

<a href="http://192.168.1.65/merceria/inicio.html">Home</a>

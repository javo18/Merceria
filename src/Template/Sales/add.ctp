<h1>Agregar venta </h1>
<?php
echo $this->Form->create('product');
echo $this->Form->input('id_venta',array('label'=>'id de la venta'));
echo $this->Form->input('nombre_producto',array('label'=>'Nombre del producto'));
echo $this->Form->input('cantidad_producto',array('label'=>'Cantidad del producto'));
echo $this->Form->input('precio_producto',array('label'=>'Precio del producto'));
echo $this->Form->input('total_venta',array('label'=>'Total de la venta'));
echo $this->Form->input('fecha_venta',array('label'=>'Fecha de la venta'));
echo $this->Form->input('id_vendedor',array('label'=>' id del vendedor'));
echo $this->Form->button(__('Guardar producto'));
echo $this ->Form->end();

?>

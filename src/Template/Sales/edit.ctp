<h1>Editar Ventas</h1>
<?php
echo $this->Form->create($ventas);
echo $this->Form->input('id_venta',array('label'=>'id de la venta '));
echo $this->Form->input('nombre_producto',array('label'=>'Nombre del producto'));
echo $this->Form->input('cantidad_producto',array('label'=>'cantidad del producto'));
echo $this->Form->input('precio_producto',array('precio del producto'));
echo $this->Form->input('total_venta',array('label'=>'Total de la venta'));
echo $this->Form->input('fecha_venta',array('label'=>'fecha de la venta'));
echo $this->Form->input('id_vendedor',array('id del vendedor'));
echo $this->Form->button(__('Guardar producto'));
echo $this ->Form->end();

?>
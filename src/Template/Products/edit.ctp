<h1>Editar Producto</h1>
<?php
echo $this->Form->create('product');
echo $this->Form->input('ID_producto',array('label'=>'ID del producto'));
echo $this->Form->input('nombre_producto',array('label'=>'Nombre del producto'));
echo $this->Form->input('precio_producto',array('label'=>'Precio del producto'));
echo $this->Form->input('cantidad_producto_existente',array('label'=>'Cantidad existente del producto'));
echo $this->Form->input('descripcion_producto',array('label'=>'Descripcion del producto'));
echo $this->Form->button(__('Guardar producto'));
echo $this ->Form->end();

?>
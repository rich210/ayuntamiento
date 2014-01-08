<?php
/* @var $this UsabilidadServicioController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Usabilidad Servicios',
);

$this->menu=array(
	array('label'=>'Create UsabilidadServicio','url'=>array('create')),
	array('label'=>'Manage UsabilidadServicio','url'=>array('admin')),
);
?>

<h1>Usabilidad Servicios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
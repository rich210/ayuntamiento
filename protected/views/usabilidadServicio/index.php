<?php
/* @var $this UsabilidadServicioController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Usabilidad Servicios',
);

$this->menu=array(
	array('label'=>'Registrar Uso del Servicio','url'=>array('create')),
	array('label'=>'Administrar Usos del Servicio','url'=>array('admin')),
);
?>

<h1>Usos del Servicio</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
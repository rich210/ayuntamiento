<?php
/* @var $this UnidadHabitacionalController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Unidad Habitacionals',
);

$this->menu=array(
	array('label'=>'Registrar Unidad Habitacional','url'=>array('create')),
	array('label'=>'Administrar Unidades Habitacionales','url'=>array('admin')),
);
?>

<h1>Unidades Habitacionales</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
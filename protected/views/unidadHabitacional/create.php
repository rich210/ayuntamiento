<?php
/* @var $this UnidadHabitacionalController */
/* @var $model UnidadHabitacional */
?>

<?php
$this->breadcrumbs=array(
	'Unidad Habitacionals'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Unidades Habitacionales', 'url'=>array('index')),
	array('label'=>'Administrar Unidades Habitacionales', 'url'=>array('admin')),
);
?>

<h1>Registrar Unidad Habitacional</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
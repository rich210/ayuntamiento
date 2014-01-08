<?php
/* @var $this UnidadHabitacionalController */
/* @var $model UnidadHabitacional */
?>

<?php
$this->breadcrumbs=array(
	'Unidad Habitacionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnidadHabitacional', 'url'=>array('index')),
	array('label'=>'Manage UnidadHabitacional', 'url'=>array('admin')),
);
?>

<h1>Create UnidadHabitacional</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
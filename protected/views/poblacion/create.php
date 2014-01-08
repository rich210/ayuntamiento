<?php
/* @var $this PoblacionController */
/* @var $model Poblacion */
?>

<?php
$this->breadcrumbs=array(
	'Poblacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Poblacion', 'url'=>array('index')),
	array('label'=>'Manage Poblacion', 'url'=>array('admin')),
);
?>

<h1>Create Poblacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
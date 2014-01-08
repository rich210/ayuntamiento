<?php
/* @var $this InteresController */
/* @var $model Interes */
?>

<?php
$this->breadcrumbs=array(
	'Interes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Interes', 'url'=>array('index')),
	array('label'=>'Manage Interes', 'url'=>array('admin')),
);
?>

<h1>Create Interes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
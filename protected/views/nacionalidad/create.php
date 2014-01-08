<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
?>

<?php
$this->breadcrumbs=array(
	'Nacionalidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nacionalidad', 'url'=>array('index')),
	array('label'=>'Manage Nacionalidad', 'url'=>array('admin')),
);
?>

<h1>Create Nacionalidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
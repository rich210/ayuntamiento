<?php
/* @var $this InteresController */
/* @var $model Interes */
?>

<?php
$this->breadcrumbs=array(
	'Interes'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Intereses', 'url'=>array('index')),
	array('label'=>'Adminstrar Interes', 'url'=>array('admin')),
);
?>

<h1>Registrar Interes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
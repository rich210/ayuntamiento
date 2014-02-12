<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */
?>

<?php
$this->breadcrumbs=array(
	'Ocupaciones'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Ocupaciones', 'url'=>array('index')),
	array('label'=>'Administrar Ocupaciones', 'url'=>array('admin')),
);
?>

<h1>Registrar Ocupación</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
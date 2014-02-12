<?php
/* @var $this ClienteController */
/* @var $model Cliente */
?>

<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Registro',
);

$this->menu=array(
	array('label'=>'Lista de Clientes', 'url'=>array('index')),
	array('label'=>'Administrar Clientes', 'url'=>array('admin')),
);
?>

<h1>Registro Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
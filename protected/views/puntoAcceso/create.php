<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */
?>

<?php
$this->breadcrumbs=array(
	'Antenas'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Antenas', 'url'=>array('index')),
	array('label'=>'Administrar Antenas', 'url'=>array('admin')),
);
?>

<h1>Registrar Antena</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
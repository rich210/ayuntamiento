<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */
?>

<?php
$this->breadcrumbs=array(
	'Punto Accesos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PuntoAcceso', 'url'=>array('index')),
	array('label'=>'Manage PuntoAcceso', 'url'=>array('admin')),
);
?>

<h1>Create PuntoAcceso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
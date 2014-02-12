<?php
/* @var $this HotspotController */
/* @var $model Hotspot */
?>

<?php
$this->breadcrumbs=array(
	'Hotspots'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Hotspots', 'url'=>array('index')),
	array('label'=>'Administrar Hotspots', 'url'=>array('admin')),
);
?>

<h1>Create Hotspot</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
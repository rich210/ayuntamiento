<?php
/* @var $this HotspotController */
/* @var $model Hotspot */
?>

<?php
$this->breadcrumbs=array(
	'Hotspots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hotspot', 'url'=>array('index')),
	array('label'=>'Manage Hotspot', 'url'=>array('admin')),
);
?>

<h1>Create Hotspot</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
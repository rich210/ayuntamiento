<?php
/* @var $this HotspotController */
/* @var $model Hotspot */
?>

<?php
$this->breadcrumbs=array(
	'Hotspots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hotspot', 'url'=>array('index')),
	array('label'=>'Create Hotspot', 'url'=>array('create')),
	array('label'=>'View Hotspot', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hotspot', 'url'=>array('admin')),
);
?>

    <h1>Update Hotspot <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
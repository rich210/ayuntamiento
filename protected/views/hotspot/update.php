<?php
/* @var $this HotspotController */
/* @var $model Hotspot */
?>

<?php
$this->breadcrumbs=array(
	'Hotspots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Hotspots', 'url'=>array('index')),
	array('label'=>'Registrar Hotspot', 'url'=>array('create')),
	array('label'=>'Ver Hotspots', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Hotspots', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Hotspot <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
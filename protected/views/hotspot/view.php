<?php
/* @var $this HotspotController */
/* @var $model Hotspot */
?>

<?php
$this->breadcrumbs=array(
	'Hotspots'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hotspot', 'url'=>array('index')),
	array('label'=>'Create Hotspot', 'url'=>array('create')),
	array('label'=>'Update Hotspot', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hotspot', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hotspot', 'url'=>array('admin')),
);
?>

<h1>View Hotspot #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'html',
		'fecha_creacion',
		'fecha_modificacion',
		'caducidad',
		'predeterminado',
	),
)); ?>
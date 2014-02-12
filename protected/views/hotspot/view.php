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
	array('label'=>'Listar Hotspots', 'url'=>array('index')),
	array('label'=>'Registrar Hotspot', 'url'=>array('create')),
	array('label'=>'Actualizarr Hotspot', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Hotspot', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Hotspots', 'url'=>array('admin')),
);
?>

<h1>Ver Hotspot #<?php echo $model->id; ?></h1>

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
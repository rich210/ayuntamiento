<?php
/* @var $this UsabilidadServicioController */
/* @var $model UsabilidadServicio */
?>

<?php
$this->breadcrumbs=array(
	'Usabilidad Servicios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsabilidadServicio', 'url'=>array('index')),
	array('label'=>'Create UsabilidadServicio', 'url'=>array('create')),
	array('label'=>'Update UsabilidadServicio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsabilidadServicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsabilidadServicio', 'url'=>array('admin')),
);
?>

<h1>View UsabilidadServicio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_uso_servicio',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
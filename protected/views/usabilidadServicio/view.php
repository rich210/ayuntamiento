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
	array('label'=>'Listar Usos del Servicio', 'url'=>array('index')),
	array('label'=>'Registrar Uso del Servicio', 'url'=>array('create')),
	array('label'=>'Actualizar Uso del Servicio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Uso del Servicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usos del Servicio', 'url'=>array('admin')),
);
?>

<h1>Ver Uso del Servicio #<?php echo $model->id; ?></h1>

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
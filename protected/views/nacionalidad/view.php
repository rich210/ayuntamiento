<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
?>

<?php
$this->breadcrumbs=array(
	'Nacionalidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Nacionalidades', 'url'=>array('index')),
	array('label'=>'Registrar Nacionalidad', 'url'=>array('create')),
	array('label'=>'Actualizar Nacionalidad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Nacionalidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Nacionalidades', 'url'=>array('admin')),
);
?>

<h1>Ver Nacionalidad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_nacionalidad',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */
?>

<?php
$this->breadcrumbs=array(
	'Estados Civiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Estados Civiles', 'url'=>array('index')),
	array('label'=>'Registrar Estado Civil', 'url'=>array('create')),
	array('label'=>'Actualizar Estado Civil', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Estado Civil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estados Civiles', 'url'=>array('admin')),
);
?>

<h1>Ver Estado Civil #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_estado_civil',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
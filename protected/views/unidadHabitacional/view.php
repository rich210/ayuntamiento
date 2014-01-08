<?php
/* @var $this UnidadHabitacionalController */
/* @var $model UnidadHabitacional */
?>

<?php
$this->breadcrumbs=array(
	'Unidad Habitacionals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UnidadHabitacional', 'url'=>array('index')),
	array('label'=>'Create UnidadHabitacional', 'url'=>array('create')),
	array('label'=>'Update UnidadHabitacional', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UnidadHabitacional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnidadHabitacional', 'url'=>array('admin')),
);
?>

<h1>View UnidadHabitacional #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'codigo_postal',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
		'pais_id',
		'estado_id',
		'municipio_id',
		'poblacion_id',
	),
)); ?>
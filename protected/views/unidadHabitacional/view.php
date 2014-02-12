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
	array('label'=>'Listar Unidades Habitacionales', 'url'=>array('index')),
	array('label'=>'Registrar Unidad Habitacional', 'url'=>array('create')),
	array('label'=>'Actualizar Unidad Habitacional', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Unidad Habitacional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Unidades Habitacionales', 'url'=>array('admin')),
);
?>

<h1>Ver Unidad Habitacional #<?php echo $model->id; ?></h1>

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
	),
)); ?>
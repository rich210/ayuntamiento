<?php
/* @var $this EstadoCivilController */
/* @var $model EstadoCivil */
?>

<?php
$this->breadcrumbs=array(
	'Estado Civils'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EstadoCivil', 'url'=>array('index')),
	array('label'=>'Create EstadoCivil', 'url'=>array('create')),
	array('label'=>'Update EstadoCivil', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EstadoCivil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoCivil', 'url'=>array('admin')),
);
?>

<h1>View EstadoCivil #<?php echo $model->id; ?></h1>

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
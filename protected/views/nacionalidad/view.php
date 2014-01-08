<?php
/* @var $this NacionalidadController */
/* @var $model Nacionalidad */
?>

<?php
$this->breadcrumbs=array(
	'Nacionalidads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nacionalidad', 'url'=>array('index')),
	array('label'=>'Create Nacionalidad', 'url'=>array('create')),
	array('label'=>'Update Nacionalidad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nacionalidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nacionalidad', 'url'=>array('admin')),
);
?>

<h1>View Nacionalidad #<?php echo $model->id; ?></h1>

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
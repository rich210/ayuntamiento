<?php
/* @var $this InteresController */
/* @var $model Interes */
?>

<?php
$this->breadcrumbs=array(
	'Interes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Intereses', 'url'=>array('index')),
	array('label'=>'Registrar Interes', 'url'=>array('create')),
	array('label'=>'Actualizar Interes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Interes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Intereses', 'url'=>array('admin')),
);
?>

<h1>Ver Interes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_interes',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
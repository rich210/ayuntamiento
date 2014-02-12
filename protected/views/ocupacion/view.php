<?php
/* @var $this OcupacionController */
/* @var $model Ocupacion */
?>

<?php
$this->breadcrumbs=array(
	'Ocupaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Ocupaciones', 'url'=>array('index')),
	array('label'=>'Registrar Ocupación', 'url'=>array('create')),
	array('label'=>'Actualizar Ocupación', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Ocupación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Ocupaciones', 'url'=>array('admin')),
);
?>

<h1>Ver Ocupación #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_ocupacion',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
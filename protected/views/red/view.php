<?php
/* @var $this RedController */
/* @var $model Red */
?>

<?php
$this->breadcrumbs=array(
	'Reds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Red', 'url'=>array('index')),
	array('label'=>'Create Red', 'url'=>array('create')),
	array('label'=>'Update Red', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Red', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Red', 'url'=>array('admin')),
);
?>

<h1>View Red #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'direccion',
		'fecha_creacion',
		'fecha_modificacion',
		'cancelado',
		'zona_id',
	),
)); ?>
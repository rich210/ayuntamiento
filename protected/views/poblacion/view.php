<?php
/* @var $this PoblacionController */
/* @var $model Poblacion */
?>

<?php
$this->breadcrumbs=array(
	'Poblacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Poblacion', 'url'=>array('index')),
	array('label'=>'Create Poblacion', 'url'=>array('create')),
	array('label'=>'Update Poblacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Poblacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Poblacion', 'url'=>array('admin')),
);
?>

<h1>View Poblacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
		'pais_id',
		'estado_id',
		'municipio_id',
	),
)); ?>
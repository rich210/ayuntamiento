<?php
/* @var $this ZonaCiudadController */
/* @var $model ZonaCiudad */
?>

<?php
$this->breadcrumbs=array(
	'Zona Ciudads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ZonaCiudad', 'url'=>array('index')),
	array('label'=>'Create ZonaCiudad', 'url'=>array('create')),
	array('label'=>'Update ZonaCiudad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ZonaCiudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ZonaCiudad', 'url'=>array('admin')),
);
?>

<h1>View ZonaCiudad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'fecha_creacion',
		'fecha_modificacion',
		'cancelado',
	),
)); ?>
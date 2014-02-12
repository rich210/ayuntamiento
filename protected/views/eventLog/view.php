<?php
/* @var $this EventLogController */
/* @var $model EventLog */
?>

<?php
$this->breadcrumbs=array(
	'Event Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Event Log', 'url'=>array('index')),
	array('label'=>'Registrar Event Log', 'url'=>array('create')),
	array('label'=>'Actualizar Event Log', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar EventLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Event Log', 'url'=>array('admin')),
);
?>

<h1>Ver EventLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'fecha',
		'punto_acceso_id',
		'cliente_id',
		'tipo_evento_id',
		'detalles',
	),
)); ?>
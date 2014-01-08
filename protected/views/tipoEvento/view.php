<?php
/* @var $this TipoEventoController */
/* @var $model TipoEvento */
?>

<?php
$this->breadcrumbs=array(
	'Tipo Eventos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoEvento', 'url'=>array('index')),
	array('label'=>'Create TipoEvento', 'url'=>array('create')),
	array('label'=>'Update TipoEvento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoEvento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoEvento', 'url'=>array('admin')),
);
?>

<h1>View TipoEvento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_evento',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
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
	array('label'=>'Listar Tipos de Eventos', 'url'=>array('index')),
	array('label'=>'Registrar Tipo de Evento', 'url'=>array('create')),
	array('label'=>'Actualizar Tipo de Evento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Tipo de Evento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipos de Eventos', 'url'=>array('admin')),
);
?>

<h1>View Tipo de Evento #<?php echo $model->id; ?></h1>

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
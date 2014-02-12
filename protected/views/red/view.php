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
	array('label'=>'Listar Parques', 'url'=>array('index')),
	array('label'=>'Registrar Parque', 'url'=>array('create')),
	array('label'=>'Actualizar Parque', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Parque', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Parques', 'url'=>array('admin')),
);
?>

<h1>Ver Parque #<?php echo $model->id; ?></h1>

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
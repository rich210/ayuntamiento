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
	array('label'=>'Listar Zonas de la Ciudad', 'url'=>array('index')),
	array('label'=>'Registrar Zona de la Ciudad', 'url'=>array('create')),
	array('label'=>'Actualizar Zona de la Ciudad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Zona de la Ciudad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Zonas de la Ciudad', 'url'=>array('admin')),
);
?>

<h1>Ver Zona de la Ciudad #<?php echo $model->id; ?></h1>

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
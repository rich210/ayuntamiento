<?php
/* @var $this NivelEstudioController */
/* @var $model NivelEstudio */
?>

<?php
$this->breadcrumbs=array(
	'Niveles de Estudios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Niveles de Estudios', 'url'=>array('index')),
	array('label'=>'Registrar Nivel de Estudio', 'url'=>array('create')),
	array('label'=>'Actualizar Nivel de Estudio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Nivel de Estudio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Niveles de Estudios', 'url'=>array('admin')),
);
?>

<h1>Ver Nivel de Estudio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_nivel_estudio',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
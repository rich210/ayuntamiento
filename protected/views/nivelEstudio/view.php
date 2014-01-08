<?php
/* @var $this NivelEstudioController */
/* @var $model NivelEstudio */
?>

<?php
$this->breadcrumbs=array(
	'Nivel Estudios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NivelEstudio', 'url'=>array('index')),
	array('label'=>'Create NivelEstudio', 'url'=>array('create')),
	array('label'=>'Update NivelEstudio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NivelEstudio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NivelEstudio', 'url'=>array('admin')),
);
?>

<h1>View NivelEstudio #<?php echo $model->id; ?></h1>

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
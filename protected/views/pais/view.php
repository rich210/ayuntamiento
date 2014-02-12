<?php
/* @var $this PaisController */
/* @var $model Pais */
?>

<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Países', 'url'=>array('index')),
	array('label'=>'Registrar País', 'url'=>array('create')),
	array('label'=>'Actualizar País', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar País', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Países', 'url'=>array('admin')),
);
?>

<h1>Ver País #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_pais',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
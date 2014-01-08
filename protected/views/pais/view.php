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
	array('label'=>'List Pais', 'url'=>array('index')),
	array('label'=>'Create Pais', 'url'=>array('create')),
	array('label'=>'Update Pais', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pais', 'url'=>array('admin')),
);
?>

<h1>View Pais #<?php echo $model->id; ?></h1>

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
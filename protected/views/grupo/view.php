<?php
/* @var $this GrupoController */
/* @var $model Grupo */
?>

<?php
$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Grupos', 'url'=>array('index')),
	array('label'=>'Registrar Grupo', 'url'=>array('create')),
	array('label'=>'Actualizar Grupo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Grupo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Grupos', 'url'=>array('admin')),
);
?>

<h1>Ver Grupos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'fecha_modificacion',
		'fecha_creacion',
	),
)); ?>
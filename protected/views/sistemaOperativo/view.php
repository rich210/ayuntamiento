<?php
/* @var $this SistemaOperativoController */
/* @var $model SistemaOperativo */
?>

<?php
$this->breadcrumbs=array(
	'Sistema Operativos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Sistemas Operativos', 'url'=>array('index')),
	array('label'=>'Registrar Sistema Operativo', 'url'=>array('create')),
	array('label'=>'Actualizar Sistema Operativo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Sistema Operativo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Sistemas Operativos', 'url'=>array('admin')),
);
?>

<h1>Ver Sistema Operativo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'comentarios',
	),
)); ?>
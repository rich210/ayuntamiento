<?php
/* @var $this EquipoConexionController */
/* @var $model EquipoConexion */
?>

<?php
$this->breadcrumbs=array(
	'Equipo Conexions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EquipoConexion', 'url'=>array('index')),
	array('label'=>'Create EquipoConexion', 'url'=>array('create')),
	array('label'=>'Update EquipoConexion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EquipoConexion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EquipoConexion', 'url'=>array('admin')),
);
?>

<h1>View EquipoConexion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre_equipo_conexion',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
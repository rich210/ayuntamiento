<?php
/* @var $this EquipoConexionController */
/* @var $model EquipoConexion */
?>

<?php
$this->breadcrumbs=array(
	'Equipos de Conexión'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Equipos de Conexión', 'url'=>array('index')),
	array('label'=>'Registrar Equipos de Conexión', 'url'=>array('create')),
	array('label'=>'Actualizar Equipo de Conexión', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Equipo de Conexión', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Equipos de Conexión', 'url'=>array('admin')),
);
?>

<h1>Ver Equipo de Conexión #<?php echo $model->id; ?></h1>

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
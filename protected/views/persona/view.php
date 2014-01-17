<?php
/* @var $this PersonaController */
/* @var $model Persona */
?>

<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Persona', 'url'=>array('index')),
	array('label'=>'Create Persona', 'url'=>array('create')),
	array('label'=>'Update Persona', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Persona', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Persona', 'url'=>array('admin')),
);
?>

<h1>View Persona #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'titulo',
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'fecha_nacimiento',
		'direccion',
		'telefono',
		'email',
		'genero',
		'bloqueo',
		'fecha_creacion',
		'fecha_modificacion',
		'nivel_estudios_id',
		'ocupacion_id',
		'estado_civil_id',
		'nacionalidad_id',
		'equipo_conexion_id',
		'usabilidad_servicio_id',
		'pais_id',
		'estado_id',
		'municipio_id',
		'unidad_habitacional_id',
		'usuario_id',
	),
)); ?>
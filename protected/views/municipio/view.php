<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
?>

<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Municipios', 'url'=>array('index')),
	array('label'=>'Registrar Municipio', 'url'=>array('create')),
	array('label'=>'Actualizar Municipio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliiminar Municipio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Municipios', 'url'=>array('admin')),
);
?>

<h1>Ver Municipio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
		'pais_id',
		'estado_id',
	),
)); ?>
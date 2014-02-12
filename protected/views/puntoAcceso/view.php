<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */
?>

<?php
$this->breadcrumbs=array(
	'Punto Accesos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Antenas', 'url'=>array('index')),
	array('label'=>'Registrar Antena', 'url'=>array('create')),
	array('label'=>'Actualizar Antena', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Antena', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Antenas', 'url'=>array('admin')),
);
?>

<h1>Ver Antena #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'status',
		'nombre',
		'descripcionProducto',
		'ipPublica',
		'codigoProducto',
		'mac',
		'modelo',
		'numeroSerial',
		'lanIp',
		'red_id',
		'lat',
		'lng',
	),
)); ?>
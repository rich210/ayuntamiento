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
	array('label'=>'List PuntoAcceso', 'url'=>array('index')),
	array('label'=>'Create PuntoAcceso', 'url'=>array('create')),
	array('label'=>'Update PuntoAcceso', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PuntoAcceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PuntoAcceso', 'url'=>array('admin')),
);
?>

<h1>View PuntoAcceso #<?php echo $model->id; ?></h1>

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
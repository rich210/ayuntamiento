<?php
/* @var $this PaginaInteresRedController */
/* @var $model PaginaInteresRed */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Interes Reds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Páginas Intereses Parques', 'url'=>array('index')),
	array('label'=>'Registrar Páquina Interés Parque', 'url'=>array('create')),
	array('label'=>'Actualizar Páquina Interés Parque', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Páquina Interés Parque', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Páginas Intereses Parques', 'url'=>array('admin')),
);
?>

<h1>Ver Páquina Interés Parque #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'pagina_id',
		'interes_id',
		'red_id',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
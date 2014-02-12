<?php
/* @var $this PaginaWebController */
/* @var $model PaginaWeb */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Webs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Páginas Webs', 'url'=>array('index')),
	array('label'=>'Registrar Página Web', 'url'=>array('create')),
	array('label'=>'Actualizar Página Web', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Página Web', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Páginas Webs', 'url'=>array('admin')),
);
?>

<h1>Ver Página Web #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nombre',
		'link',
		'descripcion',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
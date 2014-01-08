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
	array('label'=>'List PaginaWeb', 'url'=>array('index')),
	array('label'=>'Create PaginaWeb', 'url'=>array('create')),
	array('label'=>'Update PaginaWeb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PaginaWeb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PaginaWeb', 'url'=>array('admin')),
);
?>

<h1>View PaginaWeb #<?php echo $model->id; ?></h1>

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
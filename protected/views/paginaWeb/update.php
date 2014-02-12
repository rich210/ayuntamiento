<?php
/* @var $this PaginaWebController */
/* @var $model PaginaWeb */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Webs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Páginas Webs', 'url'=>array('index')),
	array('label'=>'Registrar Página Web', 'url'=>array('create')),
	array('label'=>'Ver Página Web', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Páginas Webs', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Página Web <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
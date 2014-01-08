<?php
/* @var $this PaginaWebController */
/* @var $model PaginaWeb */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Webs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PaginaWeb', 'url'=>array('index')),
	array('label'=>'Create PaginaWeb', 'url'=>array('create')),
	array('label'=>'View PaginaWeb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PaginaWeb', 'url'=>array('admin')),
);
?>

    <h1>Update PaginaWeb <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
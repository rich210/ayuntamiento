<?php
/* @var $this PaginaInteresRedController */
/* @var $model PaginaInteresRed */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Interes Reds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PaginaInteresRed', 'url'=>array('index')),
	array('label'=>'Create PaginaInteresRed', 'url'=>array('create')),
	array('label'=>'View PaginaInteresRed', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PaginaInteresRed', 'url'=>array('admin')),
);
?>

    <h1>Update PaginaInteresRed <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this PaginaInteresRedController */
/* @var $model PaginaInteresRed */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Interes Reds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PaginaInteresRed', 'url'=>array('index')),
	array('label'=>'Manage PaginaInteresRed', 'url'=>array('admin')),
);
?>

<h1>Create PaginaInteresRed</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
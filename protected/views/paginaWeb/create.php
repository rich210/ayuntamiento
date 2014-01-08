<?php
/* @var $this PaginaWebController */
/* @var $model PaginaWeb */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Webs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PaginaWeb', 'url'=>array('index')),
	array('label'=>'Manage PaginaWeb', 'url'=>array('admin')),
);
?>

<h1>Create PaginaWeb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
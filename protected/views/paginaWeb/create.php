<?php
/* @var $this PaginaWebController */
/* @var $model PaginaWeb */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Webs'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Páginas Webs', 'url'=>array('index')),
	array('label'=>'Administrar Páginas Webs', 'url'=>array('admin')),
);
?>

<h1>Registrar Página Web</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
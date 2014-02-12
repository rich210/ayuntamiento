<?php
/* @var $this PaginaInteresRedController */
/* @var $model PaginaInteresRed */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Interes Reds'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Páginas Interés Parques', 'url'=>array('index')),
	array('label'=>'Administrar Paginas Interés Parques', 'url'=>array('admin')),
);
?>

<h1>Registrar Página Interés Parque</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
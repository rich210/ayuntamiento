<?php
/* @var $this PaginaWebController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Webs',
);

$this->menu=array(
	array('label'=>'Registrar Página Web','url'=>array('create')),
	array('label'=>'Administrar Páginas Webs','url'=>array('admin')),
);
?>

<h1>Páginas Webs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<?php
/* @var $this PaginaWebController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Webs',
);

$this->menu=array(
	array('label'=>'Create PaginaWeb','url'=>array('create')),
	array('label'=>'Manage PaginaWeb','url'=>array('admin')),
);
?>

<h1>Pagina Webs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
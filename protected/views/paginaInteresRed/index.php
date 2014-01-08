<?php
/* @var $this PaginaInteresRedController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Interes Reds',
);

$this->menu=array(
	array('label'=>'Create PaginaInteresRed','url'=>array('create')),
	array('label'=>'Manage PaginaInteresRed','url'=>array('admin')),
);
?>

<h1>Pagina Interes Reds</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
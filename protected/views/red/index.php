<?php
/* @var $this RedController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Reds',
);

$this->menu=array(
	array('label'=>'Create Red','url'=>array('create')),
	array('label'=>'Manage Red','url'=>array('admin')),
);
?>

<h1>Reds</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
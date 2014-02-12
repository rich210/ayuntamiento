<?php
/* @var $this InteresController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Interes',
);

$this->menu=array(
	array('label'=>'Registrar Interes','url'=>array('create')),
	array('label'=>'Administar Intereses','url'=>array('admin')),
);
?>

<h1>Intereses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
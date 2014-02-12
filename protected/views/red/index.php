<?php
/* @var $this RedController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Reds',
);

$this->menu=array(
	array('label'=>'Registrar Parque','url'=>array('create')),
	array('label'=>'Administrar Parques','url'=>array('admin')),
);
?>

<h1>Parques</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
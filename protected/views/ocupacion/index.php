<?php
/* @var $this OcupacionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Ocupacions',
);

$this->menu=array(
	array('label'=>'Create Ocupacion','url'=>array('create')),
	array('label'=>'Manage Ocupacion','url'=>array('admin')),
);
?>

<h1>Ocupacions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
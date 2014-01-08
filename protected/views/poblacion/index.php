<?php
/* @var $this PoblacionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Poblacions',
);

$this->menu=array(
	array('label'=>'Create Poblacion','url'=>array('create')),
	array('label'=>'Manage Poblacion','url'=>array('admin')),
);
?>

<h1>Poblacions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
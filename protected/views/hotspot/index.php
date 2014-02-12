<?php
/* @var $this HotspotController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Hotspots',
);

$this->menu=array(
	array('label'=>'Registrar Hotspot','url'=>array('create')),
	array('label'=>'Administrar Hotspots','url'=>array('admin')),
);
?>

<h1>Hotspots</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<?php
/* @var $this PuntoAccesoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Punto Accesos',
);

$this->menu=array(
	array('label'=>'Create PuntoAcceso','url'=>array('create')),
	array('label'=>'Manage PuntoAcceso','url'=>array('admin')),
);
?>

<h1>Punto Accesos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
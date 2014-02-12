<?php
/* @var $this PuntoAccesoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Punto Accesos',
);

$this->menu=array(
	array('label'=>'Registrar Antena','url'=>array('create')),
	array('label'=>'Administrar Antenas','url'=>array('admin')),
);
?>

<h1>Antenas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
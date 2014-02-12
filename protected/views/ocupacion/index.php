<?php
/* @var $this OcupacionController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Ocupaciones',
);

$this->menu=array(
	array('label'=>'Registrar Ocupación','url'=>array('create')),
	array('label'=>'Administrar Ocupaciones','url'=>array('admin')),
);
?>

<h1>Ocupaciones</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
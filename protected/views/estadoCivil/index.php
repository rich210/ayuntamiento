<?php
/* @var $this EstadoCivilController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Estados Civiles',
);

$this->menu=array(
	array('label'=>'Registrar Estado Civil','url'=>array('create')),
	array('label'=>'Administrar Estados Civiles','url'=>array('admin')),
);
?>

<h1>Estados Civiles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
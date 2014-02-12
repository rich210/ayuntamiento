<?php
/* @var $this PersonaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
	array('label'=>'Registrar Persona','url'=>array('create')),
	array('label'=>'Administrar Personas','url'=>array('admin')),
);
?>

<h1>Personas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
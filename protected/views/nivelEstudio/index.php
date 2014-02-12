<?php
/* @var $this NivelEstudioController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Niveles de Estudios',
);

$this->menu=array(
	array('label'=>'Registrar Nivel de Estudio','url'=>array('create')),
	array('label'=>'Administrar Niveles de Estudios','url'=>array('admin')),
);
?>

<h1>Niveles de Estudios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
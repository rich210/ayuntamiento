<?php
/* @var $this NivelEstudioController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Nivel Estudios',
);

$this->menu=array(
	array('label'=>'Create NivelEstudio','url'=>array('create')),
	array('label'=>'Manage NivelEstudio','url'=>array('admin')),
);
?>

<h1>Nivel Estudios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
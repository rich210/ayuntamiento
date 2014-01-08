<?php
/* @var $this ZonaCiudadController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Zona Ciudads',
);

$this->menu=array(
	array('label'=>'Create ZonaCiudad','url'=>array('create')),
	array('label'=>'Manage ZonaCiudad','url'=>array('admin')),
);
?>

<h1>Zona Ciudads</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
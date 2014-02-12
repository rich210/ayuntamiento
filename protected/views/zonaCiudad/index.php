<?php
/* @var $this ZonaCiudadController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Zona Ciudads',
);

$this->menu=array(
	array('label'=>'Registrar Zona de la Ciudad','url'=>array('create')),
	array('label'=>'Administrar Zonas de la Ciudad','url'=>array('admin')),
);
?>

<h1>Zonas de la Ciudad</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
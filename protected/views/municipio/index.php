<?php
/* @var $this MunicipioController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Municipios',
);

$this->menu=array(
	array('label'=>'Registrar Municipio','url'=>array('create')),
	array('label'=>'Administrar Municipios','url'=>array('admin')),
);
?>

<h1>Municipios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
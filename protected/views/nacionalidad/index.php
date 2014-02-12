<?php
/* @var $this NacionalidadController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Nacionalidades',
);

$this->menu=array(
	array('label'=>'Registrar Nacionalidad','url'=>array('create')),
	array('label'=>'Administrar Nacionalidad','url'=>array('admin')),
);
?>

<h1>Nacionalidades</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
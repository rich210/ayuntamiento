<?php
/* @var $this PaisController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Paises',
);

$this->menu=array(
	array('label'=>'Registrar País','url'=>array('create')),
	array('label'=>'Administrar Países','url'=>array('admin')),
);
?>

<h1>Países</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
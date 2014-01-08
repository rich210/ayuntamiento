<?php
/* @var $this TipoEventoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Tipo Eventos',
);

$this->menu=array(
	array('label'=>'Create TipoEvento','url'=>array('create')),
	array('label'=>'Manage TipoEvento','url'=>array('admin')),
);
?>

<h1>Tipo Eventos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
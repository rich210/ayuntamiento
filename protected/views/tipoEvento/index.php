<?php
/* @var $this TipoEventoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Tipo Eventos',
);

$this->menu=array(
	array('label'=>'Registrar Tipo de Evento','url'=>array('create')),
	array('label'=>'Administrar Tipos de Eventos','url'=>array('admin')),
);
?>

<h1>Tipos de Eventos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
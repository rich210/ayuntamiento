<?php
/* @var $this EventLogController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Event Logs',
);

$this->menu=array(
	array('label'=>'Registrar EventLog','url'=>array('create')),
	array('label'=>'Administrar Event Log','url'=>array('admin')),
);
?>

<h1>Event Logs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<?php
/* @var $this EventLogController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Event Logs',
);

$this->menu=array(
	array('label'=>'Create EventLog','url'=>array('create')),
	array('label'=>'Manage EventLog','url'=>array('admin')),
);
?>

<h1>Event Logs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
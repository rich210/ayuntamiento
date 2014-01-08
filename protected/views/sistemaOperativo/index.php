<?php
/* @var $this SistemaOperativoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Sistema Operativos',
);

$this->menu=array(
	array('label'=>'Create SistemaOperativo','url'=>array('create')),
	array('label'=>'Manage SistemaOperativo','url'=>array('admin')),
);
?>

<h1>Sistema Operativos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
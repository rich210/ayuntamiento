<?php
/* @var $this PaginaInteresRedController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Interes Reds',
);

$this->menu=array(
	array('label'=>'Registrar Página Interés Parque','url'=>array('create')),
	array('label'=>'Manage Página Interés Parque','url'=>array('admin')),
);
?>

<h1>Páginas Intereses Parques</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
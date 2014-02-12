<?php
/* @var $this PaisController */
/* @var $model Pais */
?>

<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Países', 'url'=>array('index')),
	array('label'=>'Registrar País', 'url'=>array('create')),
	array('label'=>'Ver País', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Países', 'url'=>array('admin')),
);
?>

    <h1>Actualizar País <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
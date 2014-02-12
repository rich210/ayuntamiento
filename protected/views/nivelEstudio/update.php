<?php
/* @var $this NivelEstudioController */
/* @var $model NivelEstudio */
?>

<?php
$this->breadcrumbs=array(
	'Nivel Estudios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Niveles de Estudios', 'url'=>array('index')),
	array('label'=>'Registrar Nivel de Estudio', 'url'=>array('create')),
	array('label'=>'Ver Nivel de Estudio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Niveles de Estudios', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Nivel de Estudio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
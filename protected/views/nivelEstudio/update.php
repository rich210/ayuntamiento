<?php
/* @var $this NivelEstudioController */
/* @var $model NivelEstudio */
?>

<?php
$this->breadcrumbs=array(
	'Nivel Estudios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NivelEstudio', 'url'=>array('index')),
	array('label'=>'Create NivelEstudio', 'url'=>array('create')),
	array('label'=>'View NivelEstudio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NivelEstudio', 'url'=>array('admin')),
);
?>

    <h1>Update NivelEstudio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
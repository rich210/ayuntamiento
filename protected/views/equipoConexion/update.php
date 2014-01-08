<?php
/* @var $this EquipoConexionController */
/* @var $model EquipoConexion */
?>

<?php
$this->breadcrumbs=array(
	'Equipo Conexions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EquipoConexion', 'url'=>array('index')),
	array('label'=>'Create EquipoConexion', 'url'=>array('create')),
	array('label'=>'View EquipoConexion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EquipoConexion', 'url'=>array('admin')),
);
?>

    <h1>Update EquipoConexion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
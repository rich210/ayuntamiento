<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
?>

<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'ACtualizar',
);

$this->menu=array(
	array('label'=>'Listar Municipios', 'url'=>array('index')),
	array('label'=>'Registrar Municipio', 'url'=>array('create')),
	array('label'=>'Ver Municipio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Municipios', 'url'=>array('admin')),
);
?>

    <h1>ACtualizar Municipio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
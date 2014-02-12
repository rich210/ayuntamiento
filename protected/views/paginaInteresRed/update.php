<?php
/* @var $this PaginaInteresRedController */
/* @var $model PaginaInteresRed */
?>

<?php
$this->breadcrumbs=array(
	'Pagina Interes Reds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Páginas Intereses Parques', 'url'=>array('index')),
	array('label'=>'Registrar Páguina Interés Parque', 'url'=>array('create')),
	array('label'=>'Ver Páguina Interés Parque', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Páginas Intereses Parques', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Páguina Interés Parque <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
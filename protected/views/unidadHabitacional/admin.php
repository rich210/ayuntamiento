<?php
/* @var $this UnidadHabitacionalController */
/* @var $model UnidadHabitacional */


$this->breadcrumbs=array(
	'Unidad Habitacionals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UnidadHabitacional', 'url'=>array('index')),
	array('label'=>'Create UnidadHabitacional', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#unidad-habitacional-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Unidad Habitacionals</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'unidad-habitacional-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'codigo_postal',
		'cancelado',
		'fecha_creacion',
		'fecha_modificacion',
		'pais_id',
		'estado_id',
		'municipio_id',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
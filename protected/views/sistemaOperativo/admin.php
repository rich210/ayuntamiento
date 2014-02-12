<?php
/* @var $this SistemaOperativoController */
/* @var $model SistemaOperativo */


$this->breadcrumbs=array(
	'Sistema Operativos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Sistemas Operativos', 'url'=>array('index')),
	array('label'=>'Registrar Sistema Operativo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sistema-operativo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Sistemas Operativos</h1>

<p>
	También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
    
</p>

<?php echo CHtml::link('Búsqueda avanzzada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'sistema-operativo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'comentarios',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
<?php
/* @var $this PaginaInteresRedController */
/* @var $data PaginaInteresRed */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagina_id')); ?>:</b>
	<?php echo CHtml::encode($data->pagina_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interes_id')); ?>:</b>
	<?php echo CHtml::encode($data->interes_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('red_id')); ?>:</b>
	<?php echo CHtml::encode($data->red_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />


</div>
<?php
/* @var $this PaisController */
/* @var $data Pais */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_pais')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancelado')); ?>:</b>
	<?php echo CHtml::encode($data->cancelado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />


</div>
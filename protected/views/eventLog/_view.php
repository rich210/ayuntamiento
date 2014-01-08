<?php
/* @var $this EventLogController */
/* @var $data EventLog */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('punto_acceso_id')); ?>:</b>
	<?php echo CHtml::encode($data->punto_acceso_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
	<?php echo CHtml::encode($data->cliente_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_evento_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_evento_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalles')); ?>:</b>
	<?php echo CHtml::encode($data->detalles); ?>
	<br />


</div>
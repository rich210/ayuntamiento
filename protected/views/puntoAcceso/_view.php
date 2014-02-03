<?php
/* @var $this PuntoAccesoController */
/* @var $data PuntoAcceso */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionProducto')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ipPublica')); ?>:</b>
	<?php echo CHtml::encode($data->ipPublica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoProducto')); ?>:</b>
	<?php echo CHtml::encode($data->codigoProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mac')); ?>:</b>
	<?php echo CHtml::encode($data->mac); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroSerial')); ?>:</b>
	<?php echo CHtml::encode($data->numeroSerial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lanIp')); ?>:</b>
	<?php echo CHtml::encode($data->lanIp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('red_id')); ?>:</b>
	<?php echo CHtml::encode($data->red_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lng')); ?>:</b>
	<?php echo CHtml::encode($data->lng); ?>
	<br />

	*/ ?>

</div>
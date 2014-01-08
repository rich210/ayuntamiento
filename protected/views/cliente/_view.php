<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mac')); ?>:</b>
	<?php echo CHtml::encode($data->mac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
	<?php echo CHtml::encode($data->ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('compatibilidad')); ?>:</b>
	<?php echo CHtml::encode($data->compatibilidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fabricante')); ?>:</b>
	<?php echo CHtml::encode($data->fabricante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sistema_operativo_id')); ?>:</b>
	<?php echo CHtml::encode($data->sistema_operativo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id); ?>
	<br />


</div>
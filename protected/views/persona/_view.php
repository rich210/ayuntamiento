<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_materno')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bloqueo')); ?>:</b>
	<?php echo CHtml::encode($data->bloqueo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel_estudios_id')); ?>:</b>
	<?php echo CHtml::encode($data->nivel_estudios_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_civil_id')); ?>:</b>
	<?php echo CHtml::encode($data->estado_civil_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad_id')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipo_conexion_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipo_conexion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usabilidad_servicio_id')); ?>:</b>
	<?php echo CHtml::encode($data->usabilidad_servicio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais_id')); ?>:</b>
	<?php echo CHtml::encode($data->pais_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_id')); ?>:</b>
	<?php echo CHtml::encode($data->estado_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipio_id')); ?>:</b>
	<?php echo CHtml::encode($data->municipio_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidad_habitacional_id')); ?>:</b>
	<?php echo CHtml::encode($data->unidad_habitacional_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id); ?>
	<br />

	

</div>
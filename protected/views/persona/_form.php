<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary(array($model, $usuario)); ?>

            <?php echo $form->textFieldControlGroup($model,'titulo',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'nombre',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'apellido_paterno',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'apellido_materno',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
			<?php 
			$this->widget("zii.widgets.jui.CJuiDatePicker",array(
					"attribute"=>"fecha_nacimiento",
					"model"=>$model,
					"language"=>"es",
					"options"=>array(
						"dateFormat"=>"yy-mm-dd",
						'showButtonPanel'=> true,
						'changeYear'=>true,
						'changeYear'=>true,
						'dateFormat'=>'yy-mm-dd',
						'yearRange'=>'-80:-10',
						'minDate'=>'-80Y',
						'maxDate'=>'-10Y',
						 
						)
				));
			?>
			
			<?php echo $form->error($model,'fecha_nacimiento');?>
			
            <?php echo $form->textAreaControlGroup($model,'direccion',array('rows'=>6,'span'=>8)); ?>

            <?php echo $form->textFieldControlGroup($model,'telefono',array('span'=>5,'maxlength'=>10)); ?>

            <?php echo $form->textFieldControlGroup($model,'email',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->dropDownListControlGroup($model,'genero',array(0=>"Masculino", 1=>"Femenino"),array("empty"=>"Seleccione")); ?>

            <?php echo $form->dropDownListControlGroup($model,'nivel_estudios_id', $model->obtenerNivelDeEstudio()); ?>

            <?php echo $form->dropDownListControlGroup($model,'ocupacion_id',$model->obtenerOcupacion()); ?>

            <?php echo $form->dropDownListControlGroup($model,'estado_civil_id',$model->obtenerEstadoCivil()); ?>

            <?php echo $form->dropDownListControlGroup($model,'nacionalidad_id',$model->obtenerNacionalidades()); ?>

            <?php echo $form->dropDownListControlGroup($model,'equipo_conexion_id',$model->obtenerEquipoDeConexion()); ?>

            <?php echo $form->dropDownListControlGroup($model,'usabilidad_servicio_id',$model->obtenerUsabilidadDelServicio()); ?>
			
			<?php 
				echo $form->checkBoxListControlGroup(
					$model, 
					'intereses', 
					CHTml::listData(Interes::model()->findAll ("cancelado=:cancelado",array(":cancelado"=>0)),'id','nombre_interes'));
				
				
			?>

             <?php echo $form->dropDownListControlGroup(
            	$model,
            	'pais_id',
				array("empty" => 'Seleccione') +
            	CHtml::encodeArray(
					CHtml::listData(
						Pais::model()->findAll("cancelado=:cancelado",array(":cancelado"=>0)),
						'id',
						'nombre_pais'
					)
				),
				array(
					'ajax' => array(
						'type' => 'POST',
						'url' => $this->createUrl('estadosDePaises'),
						'update' => '#Persona_estado_id',
					)
				)
			); 
			?>
             
            <?php echo $form->dropDownListControlGroup(
            	$model,
            	'estado_id',array("empty" => 'Seleccione') +
            	CHtml::encodeArray(
					CHtml::listData(
						Estado::model()->findAll("cancelado=:cancelado",array(":cancelado"=>0)),
						'id',
						'nombre'
					)
				),
				array(
					'ajax' => array(
						'type' => 'POST',
						'url' => $this->createUrl('municipiosDeEstados'),
						'update' => '#Persona_municipio_id',
					)
				)
			); 
			?>

           

            <?php echo $form->dropDownListControlGroup(
				$model,
				'municipio_id',array("empty" => 'Seleccione') +
            	CHtml::encodeArray(
					CHtml::listData(
						Municipio::model()->findAll("cancelado=:cancelado",array(":cancelado"=>0)),
						'id',
						'nombre'
					)
				),
				array(
					'ajax' => array(
						'type' => 'POST',
						'url' => $this->createUrl('uniHabitacionalDeMunicipios'),
						'update' => '#Persona_unidad_habitacional_id',
					)
				)
			); 
			?>

            <?php echo $form->dropDownListControlGroup($model,
			'unidad_habitacional_id',
			CHtml::encodeArray(
					array( 0 => '--- Seleccionar ---' )
				)
			); ?>

            <?php echo $form->textFieldControlGroup($usuario,'usuario',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->passwordFieldControlGroup($usuario,'contrasena2',array('span'=>5,'maxlength'=>80)); ?>
			
			<?php echo $form->passwordFieldControlGroup($usuario,'vContrasena',array('span'=>5,'maxlength'=>80)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
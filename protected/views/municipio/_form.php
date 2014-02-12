<?php
/* @var $this MunicipioController */
/* @var $model Municipio */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'municipio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit' => true,
		'validateOnChange' => true,
		),
	)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'nombre',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->dropDownListControlGroup ($model,'cancelado',array(0=>"No", 1=>"Si"),array("empty"=>"Seleccione")); ?>
            
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
						'update' => '#Municipio_estado_id',
					)
				)
			); 
			?>
             
            <?php echo $form->dropDownListControlGroup(
            	$model,
            	'estado_id',
            	CHtml::encodeArray(
					array( 0 => '--- Seleccionar ---' )
				)
			); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
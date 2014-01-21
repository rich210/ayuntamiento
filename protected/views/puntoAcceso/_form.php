<?php
/* @var $this PuntoAccesoController */
/* @var $model PuntoAcceso */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'punto-acceso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->dropDownListControlGroup($model,'status',array("Encendido","Apagado","Mal Funcionamiento"),array("empty"=>"Seleccione")); ?>

            <?php echo $form->textFieldControlGroup($model,'nombre',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'descripcionProducto',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'ipPublica',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->textFieldControlGroup($model,'codigoProducto',array('span'=>5,'maxlength'=>30)); ?>

            <?php echo $form->textFieldControlGroup($model,'mac',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->textFieldControlGroup($model,'modelo',array('span'=>5,'maxlength'=>10)); ?>

            <?php echo $form->textFieldControlGroup($model,'numeroSerial',array('span'=>5,'maxlength'=>15)); ?>

            <?php echo $form->textFieldControlGroup($model,'lanIp',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->dropDownListControlGroup(
                $model,
                'red_id',
                CHtml::encodeArray(
                    CHtml::listData(
                        Red::model()->findAll("cancelado=:cancelado",array(":cancelado"=>0)),
                        'id',
                        'nombre'
                    )
                ),
                array( "empty" => 'Seleccione' )
            ); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
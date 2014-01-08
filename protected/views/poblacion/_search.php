<?php
/* @var $this PoblacionController */
/* @var $model Poblacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5,'maxlength'=>30)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nombre',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'cancelado',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_creacion',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fecha_modificacion',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'pais_id',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'estado_id',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textFieldControlGroup($model,'municipio_id',array('span'=>5,'maxlength'=>10)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
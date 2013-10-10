<?php
/* @var $this FormAvaliacaoQueixaVocalFrequenciaController */
/* @var $model FormAvaliacaoQueixaVocalFrequencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-avaliacao-queixa-vocal-frequencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'frequencia'); ?>
		<?php echo $form->textField($model,'frequencia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'frequencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
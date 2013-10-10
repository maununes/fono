<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Seu cadastro está sujeito a aprovação.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->passwordField($model,'senha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('cadastrar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
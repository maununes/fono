<?php
/* @var $this UsuarioTipoPermissaoController */
/* @var $model UsuarioTipoPermissao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-tipo-permissao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_tipo'); ?>
		<?php echo $form->textField($model,'usuario_tipo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_permissao'); ?>
		<?php echo $form->textField($model,'usuario_permissao',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario_permissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_criacao'); ?>
		<?php echo $form->textField($model,'data_criacao'); ?>
		<?php echo $form->error($model,'data_criacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contato';
$this->breadcrumbs=array(
	'Contato',
);
?>

<h1>Contato</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

    <?php $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts'=>array('contact'),
    )); ?>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'contact-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model,'name'); ?>

    <?php echo $form->textFieldRow($model,'email'); ?>

    <?php echo $form->textFieldRow($model,'subject',array('size'=>60,'maxlength'=>128)); ?>

    <?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'class'=>'span8')); ?>

	<?php if(CCaptcha::checkRequirements()): ?>
		<?php echo $form->captchaRow($model,'verifyCode',array(
            'hint'=>'Digite as letras mostradas na imagem acima. <br/>Não há diferenciação entre maiúsculas e minúsculas.',
        )); ?>
	<?php endif; ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Enviar',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>
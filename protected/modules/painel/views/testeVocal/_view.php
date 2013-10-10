<?php
/* @var $this TesteVocalController */
/* @var $data TesteVocal */
?>

<div class="view" onclick="location = (location.href+'/view/id/'+<?php echo $data->id;?>);" style="cursor: pointer;">

	<b><?php echo CHtml::encode('Código da avaliação'); ?>:</b>
	<?php echo CHtml::encode($data->avaliacao0->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_criacao')); ?>:</b>
	<?php echo CHtml::encode($data->data_criacao); ?>
	<br />


</div>
<hr>
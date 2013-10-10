<?php
/* @var $this FormAvaliacaoEscolaridadeController */
/* @var $data FormAvaliacaoEscolaridade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('escolaridade')); ?>:</b>
	<?php echo CHtml::encode($data->escolaridade); ?>
	<br />


</div>
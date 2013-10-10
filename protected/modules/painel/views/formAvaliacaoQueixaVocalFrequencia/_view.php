<?php
/* @var $this FormAvaliacaoQueixaVocalFrequenciaController */
/* @var $data FormAvaliacaoQueixaVocalFrequencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frequencia')); ?>:</b>
	<?php echo CHtml::encode($data->frequencia); ?>
	<br />


</div>
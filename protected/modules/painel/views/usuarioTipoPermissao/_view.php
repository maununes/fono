<?php
/* @var $this UsuarioTipoPermissaoController */
/* @var $data UsuarioTipoPermissao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_permissao')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_permissao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_criacao')); ?>:</b>
	<?php echo CHtml::encode($data->data_criacao); ?>
	<br />


</div>
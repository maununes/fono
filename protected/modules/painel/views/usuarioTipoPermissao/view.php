<?php
/* @var $this UsuarioTipoPermissaoController */
/* @var $model UsuarioTipoPermissao */

$this->breadcrumbs=array(
	'Usuario Tipo Permissaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsuarioTipoPermissao', 'url'=>array('index')),
	array('label'=>'Create UsuarioTipoPermissao', 'url'=>array('create')),
	array('label'=>'Update UsuarioTipoPermissao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsuarioTipoPermissao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioTipoPermissao', 'url'=>array('admin')),
);
?>

<h1>View UsuarioTipoPermissao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuario_tipo',
		'usuario_permissao',
		'usuario',
		'data_criacao',
	),
)); ?>

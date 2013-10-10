<?php
/* @var $this UsuarioPermissaoController */
/* @var $model UsuarioPermissao */

$this->breadcrumbs=array(
	'Usuario Permissaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsuarioPermissao', 'url'=>array('index')),
	array('label'=>'Create UsuarioPermissao', 'url'=>array('create')),
	array('label'=>'Update UsuarioPermissao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsuarioPermissao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioPermissao', 'url'=>array('admin')),
);
?>

<h1>View UsuarioPermissao #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo',
		'descricao',
	),
)); ?>

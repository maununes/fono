<?php
/* @var $this UsuarioTipoController */
/* @var $model UsuarioTipo */

$this->breadcrumbs=array(
	'Usuario Tipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UsuarioTipo', 'url'=>array('index')),
	array('label'=>'Create UsuarioTipo', 'url'=>array('create')),
	array('label'=>'Update UsuarioTipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsuarioTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsuarioTipo', 'url'=>array('admin')),
);
?>

<h1>View UsuarioTipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo',
		'descricao',
	),
)); ?>

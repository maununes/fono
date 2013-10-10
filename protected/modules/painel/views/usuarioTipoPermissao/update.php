<?php
/* @var $this UsuarioTipoPermissaoController */
/* @var $model UsuarioTipoPermissao */

$this->breadcrumbs=array(
	'Usuario Tipo Permissaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioTipoPermissao', 'url'=>array('index')),
	array('label'=>'Create UsuarioTipoPermissao', 'url'=>array('create')),
	array('label'=>'View UsuarioTipoPermissao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsuarioTipoPermissao', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioTipoPermissao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
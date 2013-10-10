<?php
/* @var $this UsuarioPermissaoController */
/* @var $model UsuarioPermissao */

$this->breadcrumbs=array(
	'Usuario Permissaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioPermissao', 'url'=>array('index')),
	array('label'=>'Create UsuarioPermissao', 'url'=>array('create')),
	array('label'=>'View UsuarioPermissao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsuarioPermissao', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioPermissao <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
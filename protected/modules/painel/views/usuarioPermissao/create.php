<?php
/* @var $this UsuarioPermissaoController */
/* @var $model UsuarioPermissao */

$this->breadcrumbs=array(
	'Usuario Permissaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarioPermissao', 'url'=>array('index')),
	array('label'=>'Manage UsuarioPermissao', 'url'=>array('admin')),
);
?>

<h1>Create UsuarioPermissao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
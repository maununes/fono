<?php
/* @var $this UsuarioTipoPermissaoController */
/* @var $model UsuarioTipoPermissao */

$this->breadcrumbs=array(
	'Usuario Tipo Permissaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarioTipoPermissao', 'url'=>array('index')),
	array('label'=>'Manage UsuarioTipoPermissao', 'url'=>array('admin')),
);
?>

<h1>Create UsuarioTipoPermissao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
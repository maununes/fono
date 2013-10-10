<?php
/* @var $this UsuarioTipoController */
/* @var $model UsuarioTipo */

$this->breadcrumbs=array(
	'Usuario Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsuarioTipo', 'url'=>array('index')),
	array('label'=>'Manage UsuarioTipo', 'url'=>array('admin')),
);
?>

<h1>Create UsuarioTipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
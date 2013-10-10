<?php
/* @var $this UsuarioTipoController */
/* @var $model UsuarioTipo */

$this->breadcrumbs=array(
	'Usuario Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsuarioTipo', 'url'=>array('index')),
	array('label'=>'Create UsuarioTipo', 'url'=>array('create')),
	array('label'=>'View UsuarioTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsuarioTipo', 'url'=>array('admin')),
);
?>

<h1>Update UsuarioTipo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
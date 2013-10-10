<?php
/* @var $this UsuarioPermissaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Permissaos',
);

$this->menu=array(
	array('label'=>'Create UsuarioPermissao', 'url'=>array('create')),
	array('label'=>'Manage UsuarioPermissao', 'url'=>array('admin')),
);
?>

<h1>Usuario Permissaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this UsuarioTipoPermissaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Tipo Permissaos',
);

$this->menu=array(
	array('label'=>'Create UsuarioTipoPermissao', 'url'=>array('create')),
	array('label'=>'Manage UsuarioTipoPermissao', 'url'=>array('admin')),
);
?>

<h1>Usuario Tipo Permissaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

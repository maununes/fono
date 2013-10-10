<?php
/* @var $this UsuarioTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuario Tipos',
);

$this->menu=array(
	array('label'=>'Create UsuarioTipo', 'url'=>array('create')),
	array('label'=>'Manage UsuarioTipo', 'url'=>array('admin')),
);
?>

<h1>Usuario Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
/* @var $this FormTesteVocalTipoController */
/* @var $model FormTesteVocalTipo */

$this->breadcrumbs=array(
	'Form Teste Vocal Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List', 'url'=>array('index')),
	array('label'=>'Manage', 'url'=>array('admin')),
);
?>

<h1>Create FormTesteVocalTipo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
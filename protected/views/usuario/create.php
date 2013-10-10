<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Cadastro',
);
?>

<h1>Cadastre-se</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
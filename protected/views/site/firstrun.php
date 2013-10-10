<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name),
)); ?>

<p>Sistema de Detecção e Classificação de Disfunções do Trato Vocal Associadas a Patologias Laríngeas.</p>

<?php $this->endWidget(); ?>

<p></p>

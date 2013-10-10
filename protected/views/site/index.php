<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name),
)); ?>

<p>Sistema de Detecção e Classificação de Disfunções do Trato Vocal Associadas a Patologias Laríngeas.</p>

<?php $this->endWidget(); ?>

<div class="well well-small" style="text-align:right;opacity:0.7; color:#FFFFFF;background-color:#000000;border:0px;">
desenvolvido por <a href="mailto:maununes120@gmail.com">Maurício Nunes</a>
</div>

<p></p>

<script>
//estilo
$('body').css('background','url("http://fib-r.com/wp-content/uploads/2011/02/Voices.jpg") repeat scroll 0 0 #000000');
$('.hero-unit').css('background-color','#000000').css('color','#FFFFFF').css('opacity','0.7');
</script>

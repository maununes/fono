<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    
	<div id="sidebar" style="width: 120px; float: right;">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'',
            ));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations', 'style'=>"text-align:center;border:1px;"),
            ));
            $this->endWidget();
        ?>
    </div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>
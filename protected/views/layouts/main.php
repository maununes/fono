<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	<style>
		.row{
			margin-left: 0px !important;
		}
		.span3{
			margin: 0px !important;
		}
		.span9{
			width: 820px !important;
			margin: 0px !important
		}
		.errorSummary{
			background: #FF0000 !important;
			color: #ffffff !important;
		}
		.errorMessage{
			background: #FF0000 !important;
			color: #ffffff !important;
		}
		
		.grid-view .filters input, .grid-view .filters select {
		   
		}
		
		.items td, th{
			text-align:center !important;
		}

	</style>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php

	if(Yii::app()->user->isGuest){//visitante
		$items = array(
					'items'=>array(
						array(
							'class'=>'bootstrap.widgets.TbMenu',
							'items'=>array(
								array('label'=>'Início', 'icon'=>'icon-home','url'=>array('/site/index')),
								array('label'=>'Sobre', 'icon'=>'icon-list-alt','url'=>array('/site/page', 'view'=>'about')),
								array('label'=>'Contato', 'icon'=>'icon-envelope','url'=>array('/site/contact')),
								array('label'=>'Cadastre-se', 'icon'=>'icon-user','url'=>array('/usuario/create')),
								array('label'=>'Entrar', 'icon'=>'icon-arrow-right','url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Sair ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
							),
						),
					),
				);
	}else if(Yii::app()->user->usuario_tipo == 1){//usuario administrador
				$items = array(
					'items'=>array(
						array(
							'class'=>'bootstrap.widgets.TbMenu',
							'items'=>array(
								array('label'=>'Início', 'url'=>array('/painel')),
								array('label'=>'Controle de Usuário', 'url'=>'#', 'items'=>array(
									array('label'=>'Usuario', 'url'=>array('/painel/usuario/admin')),
									array('label'=>'Usuario Tipo', 'url'=>array('/painel/usuarioTipo/admin')),
									array('label'=>'Usuario Permissões', 'url'=>array('/painel/usuarioPermissao/admin')),
									array('label'=>'Usuario Tipo Permissões', 'url'=>array('/painel/usuarioTipoPermissao/admin')),
									array('label'=>'ativar/desativar cadastradores', 'url'=>array('/painel/usuario/cadastradores')),
									array('label'=>'Pendentes ('.Usuario::model()->count('usuario_tipo=99').')', 'url'=>array('/painel/usuario/pendentes')),
									array('label'=>'Redefinir senha', 'url'=>array('/painel/usuario/resetsenha')),
								)),
								array('label'=>'Cadastros', 'url'=>'#', 'items'=>array(
									array('label'=>'Cadastros', 'url'=>array('/painel/cadastro/admin')),
									array('label'=>'Avaliações', 'url'=>array('/painel/avaliacao/admin')),
									array('label'=>'Testes Vocais', 'url'=>array('/painel/testeVocal/admin')),
								)),
								array('label'=>'Formulário', 'url'=>'#', 'items'=>array(
									array('label'=>'Avaliação Sexo', 'url'=>array('/painel/formAvaliacaoSexo/admin')),
									array('label'=>'Avaliação Queixa Vocal Frequencia', 'url'=>array('/painel/formAvaliacaoQueixaVocalFrequencia/admin')),
									array('label'=>'Teste Vocal Tipo', 'url'=>array('/painel/formTesteVocalTipo/admin')),
								)),
								array('label'=>'Sair ('.Yii::app()->user->name.')', 'url'=>array('/site/logout')),
							),
						),
					),
				);
	}else if(Yii::app()->user->usuario_tipo == 2){//usuario cadastrador
				$items = array(
					'items'=>array(
						array(
							'class'=>'bootstrap.widgets.TbMenu',
							'items'=>array(
								array('label'=>'Início', 'url'=>array('/painel'), 'icon'=>'icon-home' ),
								array('label'=>'Avaliações', 'url'=>'#', 'icon'=>'icon-list','items'=>array(
									array('label'=>'Criar avaliação', 'icon'=>'icon-plus','url'=>array('/painel/avaliacao/create')),
									array('label'=>'Minhas avaliações', 'icon'=>'icon-search','url'=>array('/painel/avaliacao/minhas')),
									array('label'=>'Todas as avaliações', 'icon'=>'icon-zoom-in','url'=>array('/painel/avaliacao/admin')),
									array('label'=>'Meus áudios', 'icon'=>'icon-volume-down','url'=>array('/painel/testevocal/minhas')),
									array('label'=>'Todos os áudios', 'icon'=>'icon-volume-up','url'=>array('/painel/testevocal/admin')),
								)),
								array('label'=>'Alterar senha', 'icon'=>'icon-lock','url'=>array('/painel/usuario/resetsenha')),
								array('label'=>'Ajuda', 'icon'=>'icon-question-sign','url'=>array('/utils/documentacao.pdf')),
								array('label'=>'Sair ('.Yii::app()->user->name.')', 'icon'=>'icon-remove-sign','url'=>array('/site/logout')),
							),
						),
					),
				);
	}else if(Yii::app()->user->usuario_tipo == 3){//usuario supervisor
				$items = array(
					'items'=>array(
						array(
							'class'=>'bootstrap.widgets.TbMenu',
							'items'=>array(
								array('label'=>'Início', 'url'=>array('/painel')),
								array('label'=>'Cadastros', 'url'=>'#', 'items'=>array(
										array('label'=>'Cadastros', 'url'=>array('/painel/cadastro/admin')),
										array('label'=>'Avaliações', 'url'=>array('/painel/avaliacao/admin')),
										array('label'=>'Áudios', 'url'=>array('/painel/testeVocal/admin')),
								)),
								array('label'=>'Formulários', 'url'=>'#', 'items'=>array(
									array('label'=>'Avaliação Sexo', 'url'=>array('/painel/formAvaliacaoSexo/admin')),
									array('label'=>'Avaliação Queixa Vocal Frequencia', 'url'=>array('/painel/formAvaliacaoQueixaVocalFrequencia/admin')),
									array('label'=>'Teste Vocal Tipo', 'url'=>array('/painel/formTesteVocalTipo/admin')),
								)),
								array('label'=>'Usuários', 'url'=>array('#'), 'items'=>array(
									array('label'=>'ativar/desativar cadastradores', 'url'=>array('/painel/usuario/cadastradores')),
									array('label'=>'Pendentes ('.Usuario::model()->count('usuario_tipo=99').')', 'url'=>array('/painel/usuario/pendentes')),
								)),
								array('label'=>'Relatórios', 'url'=>array('/painel/relatorio')),
								array('label'=>'Alterar senha', 'url'=>array('/painel/usuario/resetsenha')),
								array('label'=>'Sair ('.Yii::app()->user->name.')', 'url'=>array('/site/logout')),
							),
						),
					),
				);
	}
	$this->widget('bootstrap.widgets.TbNavbar',$items); 

?>

<div class="container" id="page">

	<?php
		if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php
	
$this->widget('bootstrap.widgets.TbAlert', array(
			'block'=>true, // display a larger alert block?
			'fade'=>true, // use transitions?
			'closeText'=>'×', // close link text - if set to false, no close link is displayed
			'alerts'=>array( // configurations per alert type
				'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
				'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
			),
		));


	echo $content; ?>

	<div class="clear"></div>

	<!-- 
	<div id="footer" style="background: none repeat scroll 0 0 #F5F5F5; text-align:center !important;">
		DCA - UFRN
	</div>
	-->
	<!-- footer -->

</div><!-- page -->

</body>
</html>

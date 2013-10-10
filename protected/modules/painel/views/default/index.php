<?php 
$contador = Cadastro::model();
if(Yii::app()->user->usuario_tipo == 2){//cadastrador
	echo "<div class='well well-small'><i class='icon-user'></i> ".
			Yii::app()->user->nome.
			"<div style='float:right;'>".
				$contador->count("usuario = ".Yii::app()->user->id)." de ".$contador->count()." cadastros".
			"</div></div>";
			
	echo "<div id='incompletas'><h3>Avaliações incompletas</h3>";
	echo '<table class="items table table-bordered">';
	echo '<thead><tr><td><b>Avaliação</b></td><td><b>EAV</b></td><td><b>GRBASI</b></td><td><b>Áudio</b></td></tr></thead><tbody>';
	foreach ($avaliacaoDataProvider->data as $a){

		$audio = null; $eav = null; $grbasi = null;
		if(!$a->testeVocals){
			$audio = CHtml::link("<span class=\"icon-eye-open\"></span>", array("/painel/avaliacao/view", "id"=>$a->id));
		}
			
		if(!($a->eav_grau_geral &&
			 $a->eav_rugosidade &&
			 $a->eav_soprosidade &&
			 $a->eav_tensao &&
			 $a->eav_astenia &&
			 $a->eav_instabilidade))
		{
			$eav = CHtml::link("<span class=\"icon-pencil\"></span>", array("/painel/avaliacao/update", "id"=>$a->id));
		}
			
		if( $a->grbasi_grau_geral !== "0"  ||
			$a->grbasi_rugosidade !== "0"  ||
			$a->grbasi_soprosidade !== "0" ||
			$a->grbasi_tensao !== "0"      ||
			$a->grbasi_astenia !== "0"     ||
			$a->grbasi_instabilidade !== "0")
		{
			$grbasi = CHtml::link("<span class=\"icon-pencil\"></span>", array("/painel/avaliacao/update", "id"=>$a->id));
		}
		
		if($audio || $eav || $grbasi){
			echo '<tr><td>'.$a->codigo.'</td><td>'.$eav.'</td><td>'.$grbasi.'</td><td>'.$audio.'</td></tr>';
		}
	}//fim foreach
	echo '</tbody></table></div>';

}else{//usuario nao cadastrador
	echo "<div class='well well-small'><i class='icon-user'></i>".
		Yii::app()->user->nome.
		"<div style='float:right;'>".
			$contador->count()." cadastros".
		"</div></div>";
}
?>
<script>
if($('#incompletas tr').length == 1){
	$('#incompletas').hide();
}
</script>
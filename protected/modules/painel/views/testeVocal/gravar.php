<?php
/* @var $this TesteVocalController */
/* @var $model TesteVocal */
/* @var $form CActiveForm */
?>

<script type="text/javascript" src="/fono/js/swfobject.js"></script>
<script type="text/javascript" src="/fono/js/recorder.js"></script>
<script type="text/javascript">
$(function() {
  var gain = $('#gain')[0];
  var silenceLevel = $('#silenceLevel')[0];
  for(var i=0; i<=100; i++) {
    gain.options[gain.options.length] = new Option(100-i);
    silenceLevel.options[silenceLevel.options.length] = new Option(i);
  }

  var appWidth = 24;
  var appHeight = 24;
  var flashvars = {'event_handler': 'microphone_recorder_events', 'upload_image': '/fono/images/upload.png'};
  var params = {};
  var attributes = {'id': "recorderApp", 'name':  "recorderApp"};
  swfobject.embedSWF("/fono/files/recorder.swf", "flashcontent", appWidth, appHeight, "11.0.0", "", flashvars, params, attributes);
});

function configureMicrophone() {
  if(! Recorder.isReady) {
    return;
  }

  Recorder.configure($('#rate').val(), $('#gain').val(), $('#silenceLevel').val(), $('#silenceTimeout').val());
  Recorder.setUseEchoSuppression($('#useEchoSuppression').is(":checked"));
  Recorder.setLoopBack($('#loopBack').is(":checked"));
}

//====================================================
//Estilo
//====================================================
$('#control_panel').css('white-space','nowrap');
$('#control_panel a').css('outline','none').css('display','inline-block').css('width','24px').css('height','24px');
$('#control_panel a img').css('border','0');
$('#save_button').css('position','absolute').css('padding','0').css('margin','0');
$('#play_button').css('display','inline-block');

//====================================================
//abrir/fechar configurações de captuade audio
//====================================================
$(function(){
	$('#abrirconfig').click(function(){
		$('#config').show();
		$(this).hide();
	});
});
</script>

<h1>Gravar Áudio</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teste-vocal-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php
			if($model->avaliacao){
				echo "<b>Código da avaliação:<b> ".CHtml::link(CHtml::encode($model->avaliacao0->codigo),
						array("/painel/avaliacao/view", "id"=>$model->avaliacao));
			}else{
				echo $form->labelEx($model,'avaliacao');
				echo $form->textField($model,'avaliacao',array('size'=>20,'maxlength'=>20));
				echo $form->error($model,'avaliacao'); 
			}
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php 
			echo $form->dropDownList(
									$model,
									'tipo',
									CHtml::listData(FormTesteVocalTipo::model()->findAll(), 'tipo', 'tipo')
									); 
	    ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

 <div id="status">
   Status do gravador...
  </div>

  <div id="control_panel">
  <a id="record_button" onclick="Recorder.record('audio', 'audio.wav');" href="javascript:void(0);" title="Record"><img src="/fono/images/record.png" width="24" height="24" alt="Record"/></a>
  <span id="save_button">
    <span id="flashcontent">
      <p>YSeu navegador precisa ter suporte a Javascript e Adobe Flash.</p>
    </span>
  </span>
  <a id="play_button" style="display:none;" onclick="Recorder.playBack('audio');" href="javascript:void(0);" title="Play"><img src="/fono/images/play.png" width="24" height="24" alt="Play"/></a>
  </div>

  <div>Duração: <span id="duration"></span></div>
  <div>Nível de atividade: <span id="activity_level"></span></div>
  <div>Status do Upload: <span id="upload_status"></span></div>

  <form id="uploadForm" name="uploadForm" action="/fono/upload.php">
    <input name="authenticity_token" value="xxxxx" type="hidden">
    <input name="upload_file[parent_id]" value="1" type="hidden">
    <input name="format" value="json" type="hidden">
  </form>

  <a href="#" id="abrirconfig">Configurações de Captura de Áudio</a>
  <div id="config" style="display:none;">
	  <h4>Configurar Microfone</h4>
	  <ul>
	    <form onsubmit="return false;">
	      <li style="list-style:none;">
		<label for="rate">Taxa</label>
		<select id="rate" name="rate">
		  <option value="44">44,100 Hz</option>
		  <option value="22" selected>22,050 Hz</option>
		  <option value="11">11,025 Hz</option>
		  <option value="8">8,000 Hz</option>
		  <option value="5">5,512 Hz</option>
		</select>
	      </li>
	
	      <li style="list-style:none;">
		<label for="gain">Ganho</label>
		<select id="gain" name="gain">
		</select>
	      </li>
	
	      <li style="list-style:none;">
		<label for="silenceLevel">Nível de silêncio</label>
		<select id="silenceLevel" name="silenceLevel">
		</select>
	      </li>
	
	      <li style="list-style:none;">
		<label for="silenceTimeout">Temporizador de silêncio</label>
		<input id="silenceTimeout" name="silenceTimeout" value="2000"/>
	      </li>
	
	      <li style="list-style:none;">
		<input id="useEchoSuppression" name="useEchoSuppression" type="checkbox"/>
		<label for="useEchoSuppression">Usar supressão de eco</label>
	      </li>
	
	      <li style="list-style:none;">
		<input id="loopBack" name="loopBack" type="checkbox"/>
		<label for="loopBack">Loop Back</label>
	      </li>
	
	      <li style="list-style:none;">
		<button onclick="configureMicrophone();">Configurar</button>
	      </li>
	    </form>
	  </ul>
  </div>

</div><!-- form -->
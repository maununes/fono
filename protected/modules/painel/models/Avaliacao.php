<?php

/**
 * This is the model class for table "avaliacao".
 *
 * The followings are the available columns in table 'avaliacao':
 * @property string $id
 * @property string $codigo
 * @property integer $idade
 * @property string $sexo
 * @property string $ocupacao
 * @property string $escolaridade
 * @property string $municipio
 * @property string $queixa_vocal
 * @property string $queixa_vocal_tempo
 * @property string $queixa_vocal_frequencia
 * @property string $rouquidao
 * @property string $fadiga_vocal
 * @property string $tensao
 * @property string $afonia
 * @property string $pigarro
 * @property string $garganta_aperto
 * @property string $garganta_arranhando
 * @property string $garganta_ressecada
 * @property string $garganta_sensacao_corpo_estranho
 * @property string $tosse
 * @property string $dor_ao_falar
 * @property string $dor_ao_deglutir
 * @property string $falhas_na_voz
 * @property string $outros
 * @property string $habito_falar_alto
 * @property string $habito_gritar
 * @property string $fumo
 * @property integer $fumo_tempo_anos
 * @property string $fumo_parou
 * @property integer $fumo_parou_tempo_anos
 * @property string $fumo_tipo
 * @property integer $fumo_quantidade_dia
 * @property string $fumo_diariamente
 * @property string $alcool
 * @property integer $alcool_tempo_anos
 * @property string $alcool_parou
 * @property integer $alcool_parou_tempo_anos
 * @property string $alcool_tipo
 * @property integer $alcool_quantidade_dia
 * @property string $alcool_diariamente
 * @property string $cirurgia_cp
 * @property string $rge
 * @property string $doenca_base
 * @property string $diagnostico_orl
 * @property string $grbasi_grau_geral
 * @property string $grbasi_rugosidade
 * @property string $grbasi_soprosidade
 * @property string $grbasi_tensao
 * @property string $grbasi_astenia
 * @property string $grbasi_instabilidade
 * @property string $eav_grau_geral
 * @property string $eav_rugosidade
 * @property string $eav_soprosidade
 * @property string $eav_tensao
 * @property string $eav_astenia
 * @property string $eav_instabilidade
 * @property string $info_complementares
 * @property string $data_criacao
 *
 * The followings are the available model relations:
 * @property Cadastro[] $cadastros
 * @property TesteVocal[] $testeVocals
 */
class Avaliacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Avaliacao the static model class
	 */
	 
	public $queixa_vocal_tempo_unidade;
	
	public $eav_grau_geral_consistencia;
	public $eav_rugosidade_consistencia;
	public $eav_soprosidade_consistencia;
	public $eav_tensao_consistencia;
	public $eav_astenia_consistencia;
	public $eav_instabilidade_consistencia;
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'avaliacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idade, fumo_tempo_anos, fumo_parou_tempo_anos, fumo_quantidade_dia, alcool_tempo_anos, alcool_parou_tempo_anos, alcool_quantidade_dia', 'numerical', 'integerOnly'=>true),
			array('codigo, sexo, queixa_vocal, queixa_vocal_tempo, queixa_vocal_frequencia, rouquidao, fadiga_vocal, tensao, afonia, pigarro, garganta_aperto, garganta_arranhando, garganta_ressecada, garganta_sensacao_corpo_estranho, tosse, dor_ao_falar, dor_ao_deglutir, falhas_na_voz, habito_falar_alto, habito_gritar, fumo, fumo_parou, fumo_tipo, fumo_diariamente, alcool, alcool_parou, alcool_tipo, alcool_diariamente, cirurgia_cp, rge, grbasi_grau_geral, grbasi_rugosidade, grbasi_soprosidade, grbasi_tensao, grbasi_astenia, grbasi_instabilidade, eav_grau_geral, eav_rugosidade, eav_soprosidade, eav_tensao, eav_astenia, eav_instabilidade', 'length', 'max'=>45),
			array('ocupacao, escolaridade, municipio', 'length', 'max'=>255),
			array('outros, doenca_base, diagnostico_orl, info_complementares, data_criacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, codigo, idade, sexo, ocupacao, escolaridade, municipio, queixa_vocal, queixa_vocal_tempo, queixa_vocal_frequencia, rouquidao, fadiga_vocal, tensao, afonia, pigarro, garganta_aperto, garganta_arranhando, garganta_ressecada, garganta_sensacao_corpo_estranho, tosse, dor_ao_falar, dor_ao_deglutir, falhas_na_voz, outros, habito_falar_alto, habito_gritar, fumo, fumo_tempo_anos, fumo_parou, fumo_parou_tempo_anos, fumo_tipo, fumo_quantidade_dia, fumo_diariamente, alcool, alcool_tempo_anos, alcool_parou, alcool_parou_tempo_anos, alcool_tipo, alcool_quantidade_dia, alcool_diariamente, cirurgia_cp, rge, doenca_base, diagnostico_orl, grbasi_grau_geral, grbasi_rugosidade, grbasi_soprosidade, grbasi_tensao, grbasi_astenia, grbasi_instabilidade, eav_grau_geral, eav_rugosidade, eav_soprosidade, eav_tensao, eav_astenia, eav_instabilidade, info_complementares, data_criacao', 'safe', 'on'=>'search'),
			//obrigatorios
			array('codigo, idade, sexo, ocupacao, escolaridade, municipio, queixa_vocal, queixa_vocal_frequencia, rouquidao, fadiga_vocal, tensao, afonia, pigarro, garganta_aperto, garganta_arranhando, garganta_ressecada, garganta_sensacao_corpo_estranho, tosse, dor_ao_falar, dor_ao_deglutir, falhas_na_voz, habito_falar_alto, habito_gritar, fumo, alcool, cirurgia_cp, rge, doenca_base, diagnostico_orl', 'required'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cadastros' => array(self::HAS_MANY, 'Cadastro', 'avaliacao'),
			'testeVocals' => array(self::HAS_MANY, 'TesteVocal', 'avaliacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'codigo' => 'Código',
			'idade' => 'Idade',
			'sexo' => 'Sexo',
			'ocupacao' => 'Ocupação',
			'escolaridade' => 'Escolaridade (anos de estudo)',
			'municipio' => 'Município',
			'queixa_vocal' => 'Tem queixa vocal?',
			'queixa_vocal_tempo' => 'Há quanto tempo tem queixa?',
			'queixa_vocal_frequencia' => 'Frequência da queixa',
			'rouquidao' => 'Rouquidão',
			'fadiga_vocal' => 'Fadiga Vocal',
			'tensao' => 'Tensao',
			'afonia' => 'Afonia',
			'pigarro' => 'Pigarro',
			'garganta_aperto' => 'Aperto na garganta',
			'garganta_arranhando' => 'Garganta arranhando',
			'garganta_ressecada' => 'Garganta ressecada',
			'garganta_sensacao_corpo_estranho' => 'Sensação de corpo estranho na garganta',
			'tosse' => 'Tosse',
			'dor_ao_falar' => 'Dor ao falar',
			'dor_ao_deglutir' => 'Dor ao deglutir',
			'falhas_na_voz' => 'Falhas na voz',
			'outros' => 'Outros sintomas',
			'habito_falar_alto' => 'Hábito de falar alto',
			'habito_gritar' => 'Hábito de gritar',
			'fumo' => 'Fumante',
			'fumo_tempo_anos' => 'Fuma há quanto tempo (em meses)',
			'fumo_parou' => 'Parou de fumar?',
			'fumo_parou_tempo_anos' => 'Há quanto tempo parou de fumar',
			'fumo_tipo' => 'Tipo de fumo',
			'fumo_quantidade_dia' => 'Quantas vezes fuma por dia',
			'fumo_diariamente' => 'Fuma diariamente?',
			'alcool' => 'Consome bebida alcoólica?',
			'alcool_tempo_anos' => 'Há quanto tempo consome bebida alcoólica',
			'alcool_parou' => 'Parou de consumir bebida alcoólica?',
			'alcool_parou_tempo_anos' => 'Há quanto tempo parou de consumir? (em meses)',
			'alcool_tipo' => 'Tipo de bebida alcoólica',
			'alcool_quantidade_dia' => 'Quantidade diaria (doses)',
			'alcool_diariamente' => 'Consome bebida alcoólica diariamente?',
			'cirurgia_cp' => 'Cirurgia CP',
			'rge' => 'RGE',
			'doenca_base' => 'Doença Base',
			'diagnostico_orl' => 'Diagnóstico Orl',
			'grbasi_grau_geral' => 'GRBASI Grau Geral',
			'grbasi_rugosidade' => 'GrRBASI Rugosidade',
			'grbasi_soprosidade' => 'GRBASI Soprosidade',
			'grbasi_tensao' => 'GRBASI Tensão',
			'grbasi_astenia' => 'GRBASI Astenia',
			'grbasi_instabilidade' => 'GRBASI Instabilidade',
			'eav_grau_geral' => 'EAV Grau Geral',
			'eav_rugosidade' => 'EAV Rugosidade',
			'eav_soprosidade' => 'EAV Soprosidade',
			'eav_tensao' => 'EAV Tensão',
			'eav_astenia' => 'EAV Astenia',
			'eav_instabilidade' => 'EAV Instabilidade',
			'info_complementares' => 'Informações complementares',
			'data_criacao' => 'Data de criação',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('idade',$this->idade);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('ocupacao',$this->ocupacao,true);
		$criteria->compare('escolaridade',$this->escolaridade,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('queixa_vocal',$this->queixa_vocal,true);
		$criteria->compare('queixa_vocal_tempo',$this->queixa_vocal_tempo,true);
		$criteria->compare('queixa_vocal_frequencia',$this->queixa_vocal_frequencia,true);
		$criteria->compare('rouquidao',$this->rouquidao,true);
		$criteria->compare('fadiga_vocal',$this->fadiga_vocal,true);
		$criteria->compare('tensao',$this->tensao,true);
		$criteria->compare('afonia',$this->afonia,true);
		$criteria->compare('pigarro',$this->pigarro,true);
		$criteria->compare('garganta_aperto',$this->garganta_aperto,true);
		$criteria->compare('garganta_arranhando',$this->garganta_arranhando,true);
		$criteria->compare('garganta_ressecada',$this->garganta_ressecada,true);
		$criteria->compare('garganta_sensacao_corpo_estranho',$this->garganta_sensacao_corpo_estranho,true);
		$criteria->compare('tosse',$this->tosse,true);
		$criteria->compare('dor_ao_falar',$this->dor_ao_falar,true);
		$criteria->compare('dor_ao_deglutir',$this->dor_ao_deglutir,true);
		$criteria->compare('falhas_na_voz',$this->falhas_na_voz,true);
		$criteria->compare('outros',$this->outros,true);
		$criteria->compare('habito_falar_alto',$this->habito_falar_alto,true);
		$criteria->compare('habito_gritar',$this->habito_gritar,true);
		$criteria->compare('fumo',$this->fumo,true);
		$criteria->compare('fumo_tempo_anos',$this->fumo_tempo_anos);
		$criteria->compare('fumo_parou',$this->fumo_parou,true);
		$criteria->compare('fumo_parou_tempo_anos',$this->fumo_parou_tempo_anos);
		$criteria->compare('fumo_tipo',$this->fumo_tipo,true);
		$criteria->compare('fumo_quantidade_dia',$this->fumo_quantidade_dia);
		$criteria->compare('fumo_diariamente',$this->fumo_diariamente,true);
		$criteria->compare('alcool',$this->alcool,true);
		$criteria->compare('alcool_tempo_anos',$this->alcool_tempo_anos);
		$criteria->compare('alcool_parou',$this->alcool_parou,true);
		$criteria->compare('alcool_parou_tempo_anos',$this->alcool_parou_tempo_anos);
		$criteria->compare('alcool_tipo',$this->alcool_tipo,true);
		$criteria->compare('alcool_quantidade_dia',$this->alcool_quantidade_dia);
		$criteria->compare('alcool_diariamente',$this->alcool_diariamente,true);
		$criteria->compare('cirurgia_cp',$this->cirurgia_cp,true);
		$criteria->compare('rge',$this->rge,true);
		$criteria->compare('doenca_base',$this->doenca_base,true);
		$criteria->compare('diagnostico_orl',$this->diagnostico_orl,true);
		$criteria->compare('grbasi_grau_geral',$this->grbasi_grau_geral,true);
		$criteria->compare('grbasi_rugosidade',$this->grbasi_rugosidade,true);
		$criteria->compare('grbasi_soprosidade',$this->grbasi_soprosidade,true);
		$criteria->compare('grbasi_tensao',$this->grbasi_tensao,true);
		$criteria->compare('grbasi_astenia',$this->grbasi_astenia,true);
		$criteria->compare('grbasi_instabilidade',$this->grbasi_instabilidade,true);
		$criteria->compare('eav_grau_geral',$this->eav_grau_geral,true);
		$criteria->compare('eav_rugosidade',$this->eav_rugosidade,true);
		$criteria->compare('eav_soprosidade',$this->eav_soprosidade,true);
		$criteria->compare('eav_tensao',$this->eav_tensao,true);
		$criteria->compare('eav_astenia',$this->eav_astenia,true);
		$criteria->compare('eav_instabilidade',$this->eav_instabilidade,true);
		$criteria->compare('info_complementares',$this->info_complementares,true);
		$criteria->compare('data_criacao',$this->data_criacao,true);
		//$criteria->order = 'ID DESC';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function data_criacao()
    {
		return Yii::app()->dateFormatter->format('d/MM/yyyy HH:mm:ss', $this->data_criacao);
    }
	
}
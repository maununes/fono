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
 * @property string $fumo_quantidade_dia
 * @property string $fumo_diariamente
 * @property string $alcool
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
			array('idade, fumo_tempo_anos, fumo_parou_tempo_anos', 'numerical', 'integerOnly'=>true),
			array('codigo, sexo, queixa_vocal, queixa_vocal_tempo, queixa_vocal_frequencia, rouquidao, fadiga_vocal, tensao, afonia, pigarro, garganta_aperto, garganta_arranhando, garganta_ressecada, garganta_sensacao_corpo_estranho, tosse, dor_ao_falar, dor_ao_deglutir, falhas_na_voz, habito_falar_alto, habito_gritar, fumo, fumo_parou, fumo_tipo, fumo_quantidade_dia, fumo_diariamente, alcool, cirurgia_cp, rge, grbasi_grau_geral, grbasi_rugosidade, grbasi_soprosidade, grbasi_tensao, grbasi_astenia, grbasi_instabilidade, eav_grau_geral, eav_rugosidade, eav_soprosidade, eav_tensao, eav_astenia, eav_instabilidade', 'length', 'max'=>45),
			array('ocupacao, escolaridade, municipio', 'length', 'max'=>255),
			array('outros, doenca_base, diagnostico_orl, data_criacao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, codigo, idade, sexo, ocupacao, escolaridade, municipio, queixa_vocal, queixa_vocal_tempo, queixa_vocal_frequencia, rouquidao, fadiga_vocal, tensao, afonia, pigarro, garganta_aperto, garganta_arranhando, garganta_ressecada, garganta_sensacao_corpo_estranho, tosse, dor_ao_falar, dor_ao_deglutir, falhas_na_voz, outros, habito_falar_alto, habito_gritar, fumo, fumo_tempo_anos, fumo_parou, fumo_parou_tempo_anos, fumo_tipo, fumo_quantidade_dia, fumo_diariamente, alcool, cirurgia_cp, rge, doenca_base, diagnostico_orl, grbasi_grau_geral, grbasi_rugosidade, grbasi_soprosidade, grbasi_tensao, grbasi_astenia, grbasi_instabilidade, eav_grau_geral, eav_rugosidade, eav_soprosidade, eav_tensao, eav_astenia, eav_instabilidade, data_criacao', 'safe', 'on'=>'search'),
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
			'codigo' => 'Codigo',
			'idade' => 'Idade',
			'sexo' => 'Sexo',
			'ocupacao' => 'Ocupacao',
			'escolaridade' => 'Escolaridade',
			'municipio' => 'Municipio',
			'queixa_vocal' => 'Queixa Vocal',
			'queixa_vocal_tempo' => 'Queixa Vocal Tempo',
			'queixa_vocal_frequencia' => 'Queixa Vocal Frequencia',
			'rouquidao' => 'Rouquidao',
			'fadiga_vocal' => 'Fadiga Vocal',
			'tensao' => 'Tensao',
			'afonia' => 'Afonia',
			'pigarro' => 'Pigarro',
			'garganta_aperto' => 'Garganta Aperto',
			'garganta_arranhando' => 'Garganta Arranhando',
			'garganta_ressecada' => 'Garganta Ressecada',
			'garganta_sensacao_corpo_estranho' => 'Garganta Sensacao Corpo Estranho',
			'tosse' => 'Tosse',
			'dor_ao_falar' => 'Dor Ao Falar',
			'dor_ao_deglutir' => 'Dor Ao Deglutir',
			'falhas_na_voz' => 'Falhas Na Voz',
			'outros' => 'Outros',
			'habito_falar_alto' => 'Habito Falar Alto',
			'habito_gritar' => 'Habito Gritar',
			'fumo' => 'Fumo',
			'fumo_tempo_anos' => 'Fumo Tempo Anos',
			'fumo_parou' => 'Fumo Parou',
			'fumo_parou_tempo_anos' => 'Fumo Parou Tempo Anos',
			'fumo_tipo' => 'Fumo Tipo',
			'fumo_quantidade_dia' => 'Fumo Quantidade Dia',
			'fumo_diariamente' => 'Fumo Diariamente',
			'alcool' => 'Alcool',
			'cirurgia_cp' => 'Cirurgia Cp',
			'rge' => 'Rge',
			'doenca_base' => 'Doenca Base',
			'diagnostico_orl' => 'Diagnostico Orl',
			'grbasi_grau_geral' => 'Grbasi Grau Geral',
			'grbasi_rugosidade' => 'Grbasi Rugosidade',
			'grbasi_soprosidade' => 'Grbasi Soprosidade',
			'grbasi_tensao' => 'Grbasi Tensao',
			'grbasi_astenia' => 'Grbasi Astenia',
			'grbasi_instabilidade' => 'Grbasi Instabilidade',
			'eav_grau_geral' => 'Eav Grau Geral',
			'eav_rugosidade' => 'Eav Rugosidade',
			'eav_soprosidade' => 'Eav Soprosidade',
			'eav_tensao' => 'Eav Tensao',
			'eav_astenia' => 'Eav Astenia',
			'eav_instabilidade' => 'Eav Instabilidade',
			'data_criacao' => 'Data Criacao',
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
		$criteria->compare('fumo_quantidade_dia',$this->fumo_quantidade_dia,true);
		$criteria->compare('fumo_diariamente',$this->fumo_diariamente,true);
		$criteria->compare('alcool',$this->alcool,true);
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
		$criteria->compare('data_criacao',$this->data_criacao,true);
		
		if(Yii::app()->user->usuario_tipo == 2){
			$criteria->join = 'INNER JOIN cadastro ON cadastro.avaliacao = t.id AND cadastro.usuario ='.Yii::app()->user->id;
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function data_criacao()
    {
		return Yii::app()->dateFormatter->format('d/MM/yyyy HH:mm:ss', $this->data_criacao);
    }
}
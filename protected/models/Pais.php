<?php

/**
 * This is the model class for table "tbl_pais".
 *
 * The followings are the available columns in table 'tbl_pais':
 * @property string $id
 * @property string $nombre_pais
 * @property integer $cancelado
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 *
 * The followings are the available model relations:
 * @property TblEstado[] $tblEstados
 * @property TblMunicipio[] $tblMunicipios
 * @property TblPersona[] $tblPersonas
 * @property TblPoblacion[] $tblPoblacions
 * @property TblUnidadHabitacional[] $tblUnidadHabitacionals
 */
class Pais extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pais';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_pais, cancelado, fecha_creacion, fecha_modificacion', 'required'),
			array('cancelado', 'numerical', 'integerOnly'=>true),
			array('nombre_pais', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre_pais, cancelado, fecha_creacion, fecha_modificacion', 'safe', 'on'=>'search'),
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
			'tblEstados' => array(self::HAS_MANY, 'TblEstado', 'pais_id'),
			'tblMunicipios' => array(self::HAS_MANY, 'TblMunicipio', 'pais_id'),
			'tblPersonas' => array(self::HAS_MANY, 'TblPersona', 'pais_id'),
			'tblPoblacions' => array(self::HAS_MANY, 'TblPoblacion', 'pais_id'),
			'tblUnidadHabitacionals' => array(self::HAS_MANY, 'TblUnidadHabitacional', 'pais_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_pais' => 'Nombre Pais',
			'cancelado' => 'Cancelado',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_modificacion' => 'Fecha Modificacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('nombre_pais',$this->nombre_pais,true);
		$criteria->compare('cancelado',$this->cancelado);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pais the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	 
}

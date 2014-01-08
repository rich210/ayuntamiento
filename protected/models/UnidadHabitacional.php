<?php

/**
 * This is the model class for table "tbl_unidad_habitacional".
 *
 * The followings are the available columns in table 'tbl_unidad_habitacional':
 * @property string $id
 * @property string $nombre
 * @property string $codigo_postal
 * @property integer $cancelado
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 * @property string $pais_id
 * @property string $estado_id
 * @property string $municipio_id
 * @property string $poblacion_id
 *
 * The followings are the available model relations:
 * @property TblPersona[] $tblPersonas
 * @property TblPais $pais
 * @property TblEstado $estado
 * @property TblMunicipio $municipio
 * @property TblPoblacion $poblacion
 */
class UnidadHabitacional extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_unidad_habitacional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, codigo_postal, cancelado, fecha_creacion, fecha_modificacion, pais_id, estado_id, municipio_id, poblacion_id', 'required'),
			array('cancelado', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('codigo_postal', 'length', 'max'=>8),
			array('pais_id, estado_id, municipio_id, poblacion_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, codigo_postal, cancelado, fecha_creacion, fecha_modificacion, pais_id, estado_id, municipio_id, poblacion_id', 'safe', 'on'=>'search'),
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
			'tblPersonas' => array(self::HAS_MANY, 'TblPersona', 'unidad_habitacional_id'),
			'pais' => array(self::BELONGS_TO, 'TblPais', 'pais_id'),
			'estado' => array(self::BELONGS_TO, 'TblEstado', 'estado_id'),
			'municipio' => array(self::BELONGS_TO, 'TblMunicipio', 'municipio_id'),
			'poblacion' => array(self::BELONGS_TO, 'TblPoblacion', 'poblacion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'codigo_postal' => 'Codigo Postal',
			'cancelado' => 'Cancelado',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_modificacion' => 'Fecha Modificacion',
			'pais_id' => 'Pais',
			'estado_id' => 'Estado',
			'municipio_id' => 'Municipio',
			'poblacion_id' => 'Poblacion',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('codigo_postal',$this->codigo_postal,true);
		$criteria->compare('cancelado',$this->cancelado);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);
		$criteria->compare('pais_id',$this->pais_id,true);
		$criteria->compare('estado_id',$this->estado_id,true);
		$criteria->compare('municipio_id',$this->municipio_id,true);
		$criteria->compare('poblacion_id',$this->poblacion_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UnidadHabitacional the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

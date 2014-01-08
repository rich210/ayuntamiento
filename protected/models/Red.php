<?php

/**
 * This is the model class for table "tbl_red".
 *
 * The followings are the available columns in table 'tbl_red':
 * @property string $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $direccion
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 * @property integer $cancelado
 * @property string $zona_id
 *
 * The followings are the available model relations:
 * @property TblPaginaInteresRed[] $tblPaginaInteresReds
 * @property TblPuntoAcceso[] $tblPuntoAccesos
 * @property TblZonaCiudad $zona
 * @property TblRedHotspot[] $tblRedHotspots
 */
class Red extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_red';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, direccion, fecha_creacion, fecha_modificacion, cancelado, zona_id', 'required'),
			array('cancelado', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			array('zona_id', 'length', 'max'=>10),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, direccion, fecha_creacion, fecha_modificacion, cancelado, zona_id', 'safe', 'on'=>'search'),
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
			'tblPaginaInteresReds' => array(self::HAS_MANY, 'TblPaginaInteresRed', 'red_id'),
			'tblPuntoAccesos' => array(self::HAS_MANY, 'TblPuntoAcceso', 'red_id'),
			'zona' => array(self::BELONGS_TO, 'TblZonaCiudad', 'zona_id'),
			'tblRedHotspots' => array(self::HAS_MANY, 'TblRedHotspot', 'red_id'),
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
			'descripcion' => 'Descripcion',
			'direccion' => 'Direccion',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_modificacion' => 'Fecha Modificacion',
			'cancelado' => 'Cancelado',
			'zona_id' => 'Zona',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);
		$criteria->compare('cancelado',$this->cancelado);
		$criteria->compare('zona_id',$this->zona_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Red the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

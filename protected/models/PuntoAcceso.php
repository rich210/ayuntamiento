<?php

/**
 * This is the model class for table "tbl_punto_acceso".
 *
 * The followings are the available columns in table 'tbl_punto_acceso':
 * @property string $id
 * @property integer $status
 * @property string $nombre
 * @property string $descripcionProducto
 * @property string $ipPublica
 * @property string $codigoProducto
 * @property string $mac
 * @property string $modelo
 * @property string $numeroSerial
 * @property string $lanIp
 * @property string $red_id
 * @property string $lat
 * @property string $lng
 *
 * The followings are the available model relations:
 * @property TblEventLog[] $tblEventLogs
 * @property TblRed $red
 */
class PuntoAcceso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_punto_acceso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, nombre, ipPublica, codigoProducto, mac, modelo, numeroSerial, lanIp, red_id', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('nombre, lat, lng', 'length', 'max'=>45),
			array('descripcionProducto', 'length', 'max'=>50),
			array('ipPublica, mac, lanIp', 'length', 'max'=>20),
			array('codigoProducto', 'length', 'max'=>30),
			array('modelo, red_id', 'length', 'max'=>10),
			array('numeroSerial', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, status, nombre, descripcionProducto, ipPublica, codigoProducto, mac, modelo, numeroSerial, lanIp, red_id, lat, lng', 'safe', 'on'=>'search'),
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
			'eventLogs' => array(self::HAS_MANY, 'TblEventLog', 'punto_acceso_id'),
			'red' => array(self::BELONGS_TO, 'TblRed', 'red_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'status' => 'Status',
			'nombre' => 'Nombre',
			'descripcionProducto' => 'Descripcion Producto',
			'ipPublica' => 'Ip Publica',
			'codigoProducto' => 'Codigo Producto',
			'mac' => 'Mac',
			'modelo' => 'Modelo',
			'numeroSerial' => 'Numero Serial',
			'lanIp' => 'Lan Ip',
			'red_id' => 'Red',
			'lat' => 'Latitud',
			'lng' => 'Longitud',
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
		//$criteria->compare('status',$this->status);
		//$criteria->compare('nombre',$this->nombre,true);
		//$criteria->compare('descripcionProducto',$this->descripcionProducto,true);
		//$criteria->compare('ipPublica',$this->ipPublica,true);
		//$criteria->compare('codigoProducto',$this->codigoProducto,true);
		//$criteria->compare('mac',$this->mac,true);
		//$criteria->compare('modelo',$this->modelo,true);
		//$criteria->compare('numeroSerial',$this->numeroSerial,true);
		//$criteria->compare('lanIp',$this->lanIp,true);
		//$criteria->compare('red_id',$this->red_id,true);
		//$criteria->compare('lat',$this->lat,true);
		//$criteria->compare('lng',$this->lng,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PuntoAcceso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

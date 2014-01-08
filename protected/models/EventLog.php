<?php

/**
 * This is the model class for table "tbl_event_log".
 *
 * The followings are the available columns in table 'tbl_event_log':
 * @property string $id
 * @property string $fecha
 * @property string $punto_acceso_id
 * @property string $cliente_id
 * @property string $tipo_evento_id
 * @property string $detalles
 *
 * The followings are the available model relations:
 * @property TblPuntoAcceso $puntoAcceso
 * @property TblTipoEvento $tipoEvento
 * @property TblCliente $cliente
 */
class EventLog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_event_log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, punto_acceso_id, cliente_id, tipo_evento_id, detalles', 'required'),
			array('punto_acceso_id, cliente_id, tipo_evento_id', 'length', 'max'=>10),
			array('detalles', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, punto_acceso_id, cliente_id, tipo_evento_id, detalles', 'safe', 'on'=>'search'),
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
			'puntoAcceso' => array(self::BELONGS_TO, 'TblPuntoAcceso', 'punto_acceso_id'),
			'tipoEvento' => array(self::BELONGS_TO, 'TblTipoEvento', 'tipo_evento_id'),
			'cliente' => array(self::BELONGS_TO, 'TblCliente', 'cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fecha' => 'Fecha',
			'punto_acceso_id' => 'Punto Acceso',
			'cliente_id' => 'Cliente',
			'tipo_evento_id' => 'Tipo Evento',
			'detalles' => 'Detalles',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('punto_acceso_id',$this->punto_acceso_id,true);
		$criteria->compare('cliente_id',$this->cliente_id,true);
		$criteria->compare('tipo_evento_id',$this->tipo_evento_id,true);
		$criteria->compare('detalles',$this->detalles,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EventLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

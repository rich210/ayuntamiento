<?php

/**
 * This is the model class for table "tbl_cliente".
 *
 * The followings are the available columns in table 'tbl_cliente':
 * @property string $id
 * @property string $mac
 * @property string $ip
 * @property string $compatibilidad
 * @property string $fabricante
 * @property string $sistema_operativo_id
 * @property string $usuario_id
 *
 * The followings are the available model relations:
 * @property TblUsuario $usuario
 * @property TblSistemaOperativo $sistemaOperativo
 * @property TblEventLog[] $tblEventLogs
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sistema_operativo_id', 'required'),
			array('mac, ip, compatibilidad', 'length', 'max'=>20),
			array('fabricante', 'length', 'max'=>45),
			array('sistema_operativo_id, usuario_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, mac, ip, compatibilidad, fabricante, sistema_operativo_id, usuario_id', 'safe', 'on'=>'search'),
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
			'usuario' => array(self::BELONGS_TO, 'TblUsuario', 'usuario_id'),
			'sistemaOperativo' => array(self::BELONGS_TO, 'TblSistemaOperativo', 'sistema_operativo_id'),
			'tblEventLogs' => array(self::HAS_MANY, 'TblEventLog', 'cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mac' => 'Mac',
			'ip' => 'Ip',
			'compatibilidad' => 'Compatibilidad',
			'fabricante' => 'Fabricante',
			'sistema_operativo_id' => 'Sistema Operativo',
			'usuario_id' => 'Usuario',
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
		$criteria->compare('mac',$this->mac,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('compatibilidad',$this->compatibilidad,true);
		$criteria->compare('fabricante',$this->fabricante,true);
		$criteria->compare('sistema_operativo_id',$this->sistema_operativo_id,true);
		$criteria->compare('usuario_id',$this->usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

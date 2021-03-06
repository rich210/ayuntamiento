<?php

/**
 * This is the model class for table "tbl_equipo_conexion".
 *
 * The followings are the available columns in table 'tbl_equipo_conexion':
 * @property string $id
 * @property string $nombre_equipo_conexion
 * @property string $descripcion
 * @property integer $cancelado
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 *
 * The followings are the available model relations:
 * @property TblPersona[] $tblPersonas
 */
class EquipoConexion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_equipo_conexion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_equipo_conexion, cancelado, fecha_creacion, fecha_modificacion', 'required'),
			array('cancelado', 'numerical', 'integerOnly'=>true),
			array('nombre_equipo_conexion', 'length', 'max'=>50),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre_equipo_conexion, descripcion, cancelado, fecha_creacion, fecha_modificacion', 'safe', 'on'=>'search'),
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
			'tblPersonas' => array(self::HAS_MANY, 'TblPersona', 'equipo_conexion_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_equipo_conexion' => 'Nombre del Equipo de Conexion',
			'descripcion' => 'Descripción',
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
		$criteria->compare('nombre_equipo_conexion',$this->nombre_equipo_conexion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
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
	 * @return EquipoConexion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

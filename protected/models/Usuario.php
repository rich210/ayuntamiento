<?php

/**
 * This is the model class for table "tbl_usuario".
 *
 * The followings are the available columns in table 'tbl_usuario':
 * @property string $id
 * @property string $usuario
 * @property string $contrasena
 * @property integer $cancelado
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 *
 * The followings are the available model relations:
 * @property TblCliente[] $tblClientes
 * @property TblGrupoUsuario[] $tblGrupoUsuarios
 * @property TblPersona[] $tblPersonas
 */
class Usuario extends CActiveRecord
{
	public $vContrasena;
	public $contrasena2;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario, cancelado, fecha_creacion, fecha_modificacion', 'required'),
			array('cancelado', 'numerical', 'integerOnly'=>true),
			array('vContrasena,contrasena2', 'required', 'on'=>'crearUsuario, crearPersona'),
			array('usuario','unique'),
			array('usuario','length', 'max'=>50),
			array(' contrasena', 'length', 'max'=>80),
			array('contrasena2', 'compare', 'compareAttribute' => 'vContrasena', 'on' => 'crearPersona'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, usuario, contrasena, cancelado, fecha_creacion, fecha_modificacion', 'safe', 'on'=>'search'),
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
			'tblClientes' => array(self::HAS_MANY, 'TblCliente', 'usuario_id'),
			'tblGrupoUsuarios' => array(self::HAS_MANY, 'TblGrupoUsuario', 'usuario_id'),
			'tblPersonas' => array(self::HAS_MANY, 'TblPersona', 'usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuario' => 'Usuario',
			'contrasena2' => 'Contraseña',
			'vContrasena' => 'Repetir Contraseña',
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
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('contrasena',$this->contrasena,true);
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
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function beforeSave()
	{
		if(parent::beforeSave())
		{
			if(isset($this->contrasena2) && ($this->contrasena2!= ""))
			{
				$this->contrasena = crypt($this->contrasena2);
			}
			return true;
		}
		return false;
	}
}

<?php

/**
 * This is the model class for table "tbl_persona".
 *
 * The followings are the available columns in table 'tbl_persona':
 * @property string $id
 * @property string $titulo
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $fecha_nacimiento
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property integer $genero
 * @property integer $bloqueo
 * @property string $fecha_creacion
 * @property string $fecha_modificacion
 * @property string $nivel_estudios_id
 * @property string $ocupacion_id
 * @property string $estado_civil_id
 * @property string $nacionalidad_id
 * @property string $equipo_conexion_id
 * @property string $usabilidad_servicio_id
 * @property string $pais_id
 * @property string $estado_id
 * @property string $municipio_id
 * @property string $unidad_habitacional_id
 * @property string $usuario_id
 *
 * The followings are the available model relations:
 * @property TblInteresPersona[] $tblInteresPersonas
 * @property TblNivelEstudio $nivelEstudios
 * @property TblOcupacion $ocupacion
 * @property TblEstadoCivil $estadoCivil
 * @property TblNacionalidad $nacionalidad
 * @property TblEquipoConexion $equipoConexion
 * @property TblUsabilidadServicio $usabilidadServicio
 * @property TblPais $pais
 * @property TblEstado $estado
 * @property TblMunicipio $municipio
 * @property TblUnidadHabitacional $unidadHabitacional
 * @property TblUsuario $usuario
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 public $intereses;
	 
	public function tableName()
	{
		return 'tbl_persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido_paterno, apellido_materno, fecha_nacimiento, direccion, telefono, email, genero, bloqueo, fecha_creacion, fecha_modificacion, nivel_estudios_id, ocupacion_id, estado_civil_id, nacionalidad_id, equipo_conexion_id, usabilidad_servicio_id, pais_id, estado_id, municipio_id, unidad_habitacional_id, usuario_id, intereses', 'required'),
			array('genero, bloqueo', 'numerical', 'integerOnly'=>true),
			array('titulo, email', 'length', 'max'=>45),
			array('email', 'email' ),
			array('telefono','numerical'),
			array('nombre, apellido_paterno, apellido_materno', 'length', 'max'=>50),
			array('telefono, nivel_estudios_id, ocupacion_id, estado_civil_id, nacionalidad_id, equipo_conexion_id, usabilidad_servicio_id, pais_id, estado_id, municipio_id, unidad_habitacional_id, usuario_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, titulo, nombre, apellido_paterno, apellido_materno, fecha_nacimiento, direccion, telefono, email, genero, bloqueo, fecha_creacion, fecha_modificacion, nivel_estudios_id, ocupacion_id, estado_civil_id, nacionalidad_id, equipo_conexion_id, usabilidad_servicio_id, pais_id, estado_id, municipio_id, unidad_habitacional_id, usuario_id', 'safe', 'on'=>'search'),
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
			'tblInteresPersonas' => array(self::HAS_MANY, 'TblInteresPersona', 'persona_id'),
			'nivelEstudios' => array(self::BELONGS_TO, 'TblNivelEstudio', 'nivel_estudios_id'),
			'ocupacion' => array(self::BELONGS_TO, 'TblOcupacion', 'ocupacion_id'),
			'estadoCivil' => array(self::BELONGS_TO, 'TblEstadoCivil', 'estado_civil_id'),
			'nacionalidad' => array(self::BELONGS_TO, 'TblNacionalidad', 'nacionalidad_id'),
			'equipoConexion' => array(self::BELONGS_TO, 'TblEquipoConexion', 'equipo_conexion_id'),
			'usabilidadServicio' => array(self::BELONGS_TO, 'TblUsabilidadServicio', 'usabilidad_servicio_id'),
			'pais' => array(self::BELONGS_TO, 'TblPais', 'pais_id'),
			'estado' => array(self::BELONGS_TO, 'TblEstado', 'estado_id'),
			'municipio' => array(self::BELONGS_TO, 'TblMunicipio', 'municipio_id'),
			'unidadHabitacional' => array(self::BELONGS_TO, 'TblUnidadHabitacional', 'unidad_habitacional_id'),
			'usuario' => array(self::BELONGS_TO, 'TblUsuario', 'usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'nombre' => 'Nombre',
			'apellido_paterno' => 'Apellido Paterno',
			'apellido_materno' => 'Apellido Materno',
			'fecha_nacimiento' => 'Fecha de Nacimiento',
			'direccion' => 'Dirección',
			'telefono' => 'Teléfono',
			'email' => 'Email',
			'genero' => 'Género',
			'bloqueo' => 'Bloqueo',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_modificacion' => 'Fecha Modificacion',
			'nivel_estudios_id' => 'Nivel de Estudios',
			'ocupacion_id' => 'Ocupación',
			'estado_civil_id' => 'Estado Civil',
			'nacionalidad_id' => 'Nacionalidad',
			'equipo_conexion_id' => 'Equipo de Conexión',
			'usabilidad_servicio_id' => 'Usabilidad del Servicio',
			'pais_id' => 'País',
			'estado_id' => 'Estado',
			'municipio_id' => 'Municipio',
			'unidad_habitacional_id' => 'Unidad Habitacional',
			'usuario_id' => 'Usuario',
			'intereses'=>'Intereses',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido_paterno',$this->apellido_paterno,true);
		$criteria->compare('apellido_materno',$this->apellido_materno,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('genero',$this->genero);
		$criteria->compare('bloqueo',$this->bloqueo);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);
		$criteria->compare('nivel_estudios_id',$this->nivel_estudios_id,true);
		$criteria->compare('ocupacion_id',$this->ocupacion_id,true);
		$criteria->compare('estado_civil_id',$this->estado_civil_id,true);
		$criteria->compare('nacionalidad_id',$this->nacionalidad_id,true);
		$criteria->compare('equipo_conexion_id',$this->equipo_conexion_id,true);
		$criteria->compare('usabilidad_servicio_id',$this->usabilidad_servicio_id,true);
		$criteria->compare('pais_id',$this->pais_id,true);
		$criteria->compare('estado_id',$this->estado_id,true);
		$criteria->compare('municipio_id',$this->municipio_id,true);
		$criteria->compare('unidad_habitacional_id',$this->unidad_habitacional_id,true);
		$criteria->compare('usuario_id',$this->usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function obtenerEstadoCivil()
	{
		$opciones=array();
		$opciones[0]='Seleccione';
		$estadoCiviles=EstadoCivil::model()->findAll('cancelado=:cancelado', array(':cancelado'=>0));
		foreach($estadoCiviles as $estadoCivil)
		{
			$opciones[$estadoCivil->id]=$estadoCivil->nombre_estado_civil;
		}
		return $opciones;
	
	}
	
	
	public function obtenerNacionalidades()
	{
		$opciones=array();
		$opciones[0]='Seleccione';
		$nacionalidades=Nacionalidad::model()->findAll('cancelado=:cancelado', array(':cancelado'=>0));
		foreach($nacionalidades as $nacionalidad)
		{
			$opciones[$nacionalidad->id]=$nacionalidad->nombre_nacionalidad;
		}
		return $opciones;
	
	}
	
	
	public function obtenerNivelDeEstudio()
	{
		$opciones=array();
		$opciones[0]='Seleccione';
		$niveles=NivelEstudio::model()->findAll('cancelado=:cancelado', array(':cancelado'=>0));
		foreach($niveles as $nivelEstudio)
		{
			$opciones[$nivelEstudio->id]=$nivelEstudio->nombre_nivel_estudio;
		}
		return $opciones;
	
	}
 
	
	
	
	 
 
	public function obtenerOcupacion()
	{
		$opciones=array();
		$opciones[0]='Seleccione';
		$ocupaciones=Ocupacion::model()->findAll('cancelado=:cancelado', array(':cancelado'=>0));
		foreach($ocupaciones as $ocupacion)
		{
			$opciones[$ocupacion->id]=$ocupacion->nombre_ocupacion;
		}
		return $opciones;
	
	}
	
	public function obtenerEquipoDeConexion()
	{
		$opciones=array();
		$opciones[0]='Seleccione';
		$equipos=EquipoConexion::model()->findAll('cancelado=:cancelado', array(':cancelado'=>0));
		foreach($equipos as $equipoConexion)
		{
			$opciones[$equipoConexion->id]=$equipoConexion->nombre_equipo_conexion;
		}
		return $opciones;
	
	}
	
	public function obtenerUsabilidadDelServicio()
	{
		$opciones=array();
		$opciones[0]='Seleccione';
		$servicios=UsabilidadServicio::model()->findAll('cancelado=:cancelado', array(':cancelado'=>0));
		foreach($servicios as $usabilidadServicio)
		{
			$opciones[$usabilidadServicio->id]=$usabilidadServicio->nombre_uso_servicio;
		}
		return $opciones;
	
	}
	
	
	public function obtenerPaises()
	{
	 return CHtml::listData(Pais::model()->findAll("cancelado=?",array(0)),"id","nombre_pais");
	}
	
	public function obtenerEstados($defaultPais)
	{
	 return CHtml::listData(Estado::model()->findAll("cancelado=? AND  pais_id=?",array(0,$defaultPais)),"id","nombre");
	}
	public function obtenerMunicipios($defaultEstado)
	{
	 return CHtml::listData(Municipio::model()->findAll("cancelado=? AND  estado_id=?",array(0,$defaultEstado)),"id","nombre");
	}
	
	public function obtenerUnidadHabitacional($defaultMunicipio)
	{
	 return CHtml::listData(UnidadHabitacional::model()->findAll("cancelado=? AND  municipio_id=?",array(0,$defaultMunicipio)),"id","nombre");
	}
}

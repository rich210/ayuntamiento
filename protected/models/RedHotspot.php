<?php

/**
 * This is the model class for table "tbl_red_hotspot".
 *
 * The followings are the available columns in table 'tbl_red_hotspot':
 * @property string $hotspot_id
 * @property string $red_id
 *
 * The followings are the available model relations:
 * @property TblHotspot $hotspot
 * @property TblRed $red
 */
class RedHotspot extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_red_hotspot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hotspot_id, red_id', 'required'),
			array('hotspot_id, red_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('hotspot_id, red_id', 'safe', 'on'=>'search'),
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
			'hotspot' => array(self::BELONGS_TO, 'Hotspot', 'hotspot_id'),
			'red' => array(self::BELONGS_TO, 'Red', 'red_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'hotspot_id' => 'Hotspot',
			'red_id' => 'Red',
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

		$criteria->compare('hotspot_id',$this->hotspot_id,true);
		$criteria->compare('red_id',$this->red_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RedHotspot the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

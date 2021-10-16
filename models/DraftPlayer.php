<?php

/**
 * This is the model class for table "draft_player".
 *
 * The followings are the available columns in table 'draft_player':
 * @property integer $id
 * @property string $Name
 * @property string $School
 * @property string $Year
 * @property integer $Height_ft
 * @property integer $Height_in
 * @property integer $Weight
 * @property double $dash
 * @property string $est_round
 * @property integer $est_pick
 * @property string $position
 * @property string $height
 */
class DraftPlayer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'draft_player';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, School, Year, Height_ft, Height_in, Weight, dash, est_round, est_pick, position', 'required'),
			array('Height_ft, Height_in, Weight, est_pick', 'numerical', 'integerOnly'=>true),
			array('dash', 'numerical'),
			array('Name, School, Year, est_round', 'length', 'max'=>32),
			array('position', 'length', 'max'=>11),
			array('height', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, School, Year, Height_ft, Height_in, Weight, dash, est_round, est_pick, position, height', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Player ID',
			'Name' => 'Name',
			'School' => 'School',
			'Year' => 'Year',
			'Height_ft' => 'Height Ft',
			'Height_in' => 'Height In',
			'Weight' => 'Weight',
			'dash' => 'Dash',
			'est_round' => 'Est Round',
			'est_pick' => 'Est Pick',
			'position' => 'Position',
			'height' => 'Height',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('School',$this->School,true);
		$criteria->compare('Year',$this->Year,true);
		$criteria->compare('Height_ft',$this->Height_ft);
		$criteria->compare('Height_in',$this->Height_in);
		$criteria->compare('Weight',$this->Weight);
		$criteria->compare('dash',$this->dash);
		$criteria->compare('est_round',$this->est_round,true);
		$criteria->compare('est_pick',$this->est_pick);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('height',$this->height,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DraftPlayer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

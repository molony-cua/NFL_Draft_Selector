<?php

/**
 * This is the model class for table "Roster".
 *
 * The followings are the available columns in table 'Roster':
 * @property integer $Number
 * @property string $Name
 * @property integer $Age
 * @property string $Pos
 * @property integer $G
 * @property integer $GS
 * @property integer $Wt
 * @property string $Ht
 * @property string $College_Univ
 * @property string $BirthDate
 * @property string $Yrs
 * @property integer $AV
 * @property string $Drafted
 * @property string $Team
 */
class Roster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Roster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Number, Age, G, GS, Wt, AV', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>18),
			array('Pos', 'length', 'max'=>3),
			array('Ht, Yrs', 'length', 'max'=>4),
			array('College_Univ', 'length', 'max'=>17),
			array('BirthDate', 'length', 'max'=>10),
			array('Drafted', 'length', 'max'=>45),
			array('Team', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Number, Name, Age, Pos, G, GS, Wt, Ht, College_Univ, BirthDate, Yrs, AV, Drafted, Team', 'safe', 'on'=>'search'),
		);
	}
   public function defaultScope()
    {
        return array(
            'condition'=>"team='".Yii::app()->user->name."'",
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
			'Number' => 'Number',
			'Name' => 'Name',
			'Age' => 'Age',
			'Pos' => 'Pos',
			'G' => 'G',
			'GS' => 'Gs',
			'Wt' => 'Wt',
			'Ht' => 'Ht',
			'College_Univ' => 'College Univ',
			'BCDbCriteriairthDate' => 'Birth Date',
			'Yrs' => 'Yrs',
			'AV' => 'Av',
			'Drafted' => 'Drafted',
			'Team' => 'Team',
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

		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Age',$this->Age);
		$criteria->compare('Pos',$this->Pos,true);
		$criteria->compare('G',$this->G);
		$criteria->compare('GS',$this->GS);
		$criteria->compare('Wt',$this->Wt);
		$criteria->compare('Ht',$this->Ht,true);
		$criteria->compare('College_Univ',$this->College_Univ,true);
		$criteria->compare('BirthDate',$this->BirthDate,true);
		$criteria->compare('Yrs',$this->Yrs,true);
		$criteria->compare('AV',$this->AV);
		$criteria->compare('Drafted',$this->Drafted,true);
		$criteria->compare('Team',$this->Team,true);
		$criteria->select = 'Name';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Roster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "draft_player".
 *
 * The followings are the available columns in table 'draft_player':
 * @property integer $id
 * @property string $Name
 * @property string $School
 * @property string $Year
 * @property integer $Weight
 * @property double $dash
 * @property integer $reps
 * @property double $cone
 * @property double $shuttle
 * @property double $vjump
 * @property integer $bjump
 * @property double $alength
 * @property double $hlength
 * @property string $est_round
 * @property integer $est_pick
 * @property string $position
 * @property string $height
 * @property double $player_weight
 * @property string $claimed
 */
class PickPlayer extends CActiveRecord
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
			array('claimed', 'required'),
			array('Weight, reps, bjump, est_pick', 'numerical', 'integerOnly'=>true),
			array('dash, cone, shuttle, vjump, alength, hlength, player_weight', 'numerical'),
			array('Name, School, Year, est_round, claimed', 'length', 'max'=>32),
			array('position', 'length', 'max'=>11),
			array('height', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, School, Year, Weight, dash, reps, cone, shuttle, vjump, bjump, alength, hlength, est_round, est_pick, position, height, player_weight, claimed', 'safe', 'on'=>'search'),
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
public function defaultScope()
   	 {
        return array(
            'condition'=>'claimed = "none"',
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
			'Weight' => 'Weight',
			'dash' => 'Dash',
			'reps' => 'Reps',
			'cone' => 'Cone',
			'shuttle' => 'Shuttle',
			'vjump' => 'Vjump',
			'bjump' => 'Bjump',
			'alength' => 'Alength',
			'hlength' => 'Hlength',
			'est_round' => 'Est Round',
			'est_pick' => 'Est Pick',
			'position' => 'Position',
			'height' => 'Height',
			'player_weight' => 'Player Weight',
			'claimed' => 'Claimed',
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
		$criteria->compare('Weight',$this->Weight);
		$criteria->compare('dash',$this->dash);
		$criteria->compare('reps',$this->reps);
		$criteria->compare('cone',$this->cone);
		$criteria->compare('shuttle',$this->shuttle);
		$criteria->compare('vjump',$this->vjump);
		$criteria->compare('bjump',$this->bjump);
		$criteria->compare('alength',$this->alength);
		$criteria->compare('hlength',$this->hlength);
		$criteria->compare('est_round',$this->est_round,true);
		$criteria->compare('est_pick',$this->est_pick);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('player_weight',$this->player_weight);
		$criteria->compare('claimed',$this->claimed,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PickPlayer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "team_weights".
 *
 * The followings are the available columns in table 'team_weights':
 * @property string $team
 * @property integer $DE
 * @property integer $DT
 * @property integer $FB
 * @property integer $FS
 * @property integer $ILB
 * @property integer $K
 * @property integer $LS
 * @property integer $OG
 * @property integer $OLB
 * @property integer $OT
 * @property integer $P
 * @property integer $QB
 * @property integer $RB
 * @property integer $SS
 * @property integer $TE
 * @property integer $WR
 * @property integer $C
 * @property integer $CB
 * @property integer $RT
 * @property integer $LT
 * @property integer $MLB
 * @property integer $LG
 * @property integer $RG
 */
class TeamWeights extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'team_weights';
	}
 	  public function defaultScope()
   	 {
    	    return array(
    		'condition'=>"team='".Yii::app()->user->name."'",
    	    );
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team', 'required'),
			array('DE, DT, FB, FS, ILB, K, LS, OG, OLB, OT, P, QB, RB, SS, TE, WR, C, CB, RT, LT, MLB, LG, RG', 'numerical', 'integerOnly'=>true,'min'=>0,'max'=>11),
			array('team', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('team, DE, DT, FB, FS, ILB, K, LS, OG, OLB, OT, P, QB, RB, SS, TE, WR, C, CB, RT, LT, MLB, LG, RG', 'safe', 'on'=>'search'),
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
			'team' => 'Team',
			'DE' => 'De',
			'DT' => 'Dt',
			'FB' => 'Fb',
			'FS' => 'Fs',
			'ILB' => 'Ilb',
			'K' => 'K',
			'LS' => 'Ls',
			'OG' => 'Og',
			'OLB' => 'Olb',
			'OT' => 'Ot',
			'P' => 'P',
			'QB' => 'Qb',
			'RB' => 'Rb',
			'SS' => 'Ss',
			'TE' => 'Te',
			'WR' => 'Wr',
			'C' => 'C',
			'CB' => 'Cb',
			'RT' => 'Rt',
			'LT' => 'Lt',
			'MLB' => 'Mlb',
			'LG' => 'Lg',
			'RG' => 'Rg',
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

		$criteria->compare('team',$this->team,true);
		$criteria->compare('DE',$this->DE);
		$criteria->compare('DT',$this->DT);
		$criteria->compare('FB',$this->FB);
		$criteria->compare('FS',$this->FS);
		$criteria->compare('ILB',$this->ILB);
		$criteria->compare('K',$this->K);
		$criteria->compare('LS',$this->LS);
		$criteria->compare('OG',$this->OG);
		$criteria->compare('OLB',$this->OLB);
		$criteria->compare('OT',$this->OT);
		$criteria->compare('P',$this->P);
		$criteria->compare('QB',$this->QB);
		$criteria->compare('RB',$this->RB);
		$criteria->compare('SS',$this->SS);
		$criteria->compare('TE',$this->TE);
		$criteria->compare('WR',$this->WR);
		$criteria->compare('C',$this->C);
		$criteria->compare('CB',$this->CB);
		$criteria->compare('RT',$this->RT);
		$criteria->compare('LT',$this->LT);
		$criteria->compare('MLB',$this->MLB);
		$criteria->compare('LG',$this->LG);
		$criteria->compare('RG',$this->RG);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TeamWeights the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

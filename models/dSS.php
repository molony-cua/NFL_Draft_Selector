<?php
function cmp($a, $b) {
    if ($a['player_weight'] == $b['player_weight']) {
        return 0;
    }
    return ($a['player_weight'] < $b['player_weight']) ? -1 : 1;
}

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class dSS extends CFormModel
{
public $number;
public $maths;
public $maths2;

public function rules()
    {
        return array(
        	array('number', 'required'),
		array('number','numerical','min'=>1,'max'=>256),
        );
    }


public function calculate()
    {	$min=$this->number-16;  //number is pick number
	$max=$this->number+16;
	$connection=Yii::app()->db;
	$command=$connection->createCommand('select * from draft_player where est_pick>'.$min.' and est_pick<'.$max." and claimed='none'");
	$this->maths=$command->queryAll();	//maths is the array of players
	$command2=$connection->createCommand("select * from team_weights where team='".Yii::app()->user->name."'");
	$this->maths2=$command2->queryAll();	//maths2 is the array of weights
	foreach($this->maths as &$value) {
		$temp=$this->maths2[0][$value['position']]; //player's position weight
		if($value['est_pick'] == $this->number){
			$value['player_weight']=$temp;
		}
		else if ($value['est_pick'] < $this->number){
			$value['player_weight']=$temp/($this->number-$value['est_pick']);
		}
		else if ($value['est_pick'] > $this->number){
			$value['player_weight']=$temp*($value['est_pick']-$this->number);
		}
	}
	uasort($this->maths, 'cmp');	//sorts player array by weight
    }
}
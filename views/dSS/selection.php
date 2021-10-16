<?php
/* @var $this DSSController */

$this->breadcrumbs=array(
	'DSS'=>array('/dSS'),
	'Selection',
);
$this->menu=array(
	array('label'=>'Create DraftPlayer', 'url'=>array('claim')),
);
?>
<h1><?php echo 'Reccomended Players'; ?></h1>

<p>
	'*' Indicates that the player is injured
</p>

<p>
	The Player with the lowest weighted score is the best 
</p>

<p><?php foreach ($model->maths as $temp) {
	if ($temp['player_weight'] != 0 && $temp['player_weight'] < 11){
		echo '<b>ID: </b>'.$temp['id'].'<br>';
		echo '<b>Name: </b>'.$temp['Name'].'<br>';
		echo '<b>Position: </b>',$temp['position'].'<br>';
		echo '<b>School: </b>',$temp['School'].'<br>';
		echo '<b>40 Yd Dash: </b>',$temp['dash'].'<br>';
		echo '<b>Height: </b>',$temp['height'].'<br>';
		echo '<b>Weight: </b>',$temp['Weight'].'<br>';
		echo '<b>Position: </b>',$temp['position'].'<br>';
		echo '<b>Weighted Score: </b>',$temp['player_weight'].'<br>';
		echo '<br><br>';
	}
}?></p>

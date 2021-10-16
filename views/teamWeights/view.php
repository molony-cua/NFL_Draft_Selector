<?php
/* @var $this TeamWeightsController */
/* @var $model TeamWeights */

$this->breadcrumbs=array(
	'Team Weights'=>array('index'),
	$model->team,
);

$this->menu=array(
	array('label'=>'Update Team Weights', 'url'=>array('update', 'id'=>$model->team)),
);
?>

<h1>View Team Weights: <?php echo $model->team; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'team',
		'DE',
		'DT',
		'FB',
		'FS',
		'ILB',
		'K',
		'LS',
		'OG',
		'OLB',
		'OT',
		'P',
		'QB',
		'RB',
		'SS',
		'TE',
		'WR',
		'C',
		'CB',
		'RT',
		'LT',
		'MLB',
		'LG',
		'RG',
	),
)); ?>

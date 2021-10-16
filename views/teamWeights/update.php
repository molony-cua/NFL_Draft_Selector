<?php
/* @var $this TeamWeightsController */
/* @var $model TeamWeights */

$this->breadcrumbs=array(
	'Team Weights'=>array('index'),
	$model->team=>array('view','id'=>$model->team),
	'Update',
);

$this->menu=array(
	array('label'=>'List Team Weights', 'url'=>array('index')),
);
?>

<h1>Update Team Weights: <?php echo $model->team; ?></h1>

<p>Numbers in field are the default weights.  Please make any changes you want.<br>
  Weights are integers between 0 and 11.</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
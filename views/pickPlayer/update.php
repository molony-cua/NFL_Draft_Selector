<?php
/* @var $this PickPlayerController */
/* @var $model PickPlayer */

$this->breadcrumbs=array(
	'Pick Players'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PickPlayer', 'url'=>array('index')),
	array('label'=>'Create PickPlayer', 'url'=>array('create')),
	array('label'=>'View PickPlayer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PickPlayer', 'url'=>array('admin')),
);
?>

<h1>Pick Player <?php echo $model->id; ?></h1>

<p>Please enter your team name to pick the selected player</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this PickPlayerController */
/* @var $model PickPlayer */

$this->breadcrumbs=array(
	'Pick Players'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List PickPlayer', 'url'=>array('index')),
	array('label'=>'Create PickPlayer', 'url'=>array('create')),
	array('label'=>'Update PickPlayer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PickPlayer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PickPlayer', 'url'=>array('admin')),
);
?>

<h1>View PickPlayer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Name',
		'School',
		'Year',
		'Weight',
		'dash',
		'reps',
		'cone',
		'shuttle',
		'vjump',
		'bjump',
		'alength',
		'hlength',
		'est_round',
		'est_pick',
		'position',
		'height',
		'player_weight',
		'claimed',
	),
)); ?>

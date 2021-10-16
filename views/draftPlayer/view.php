<?php
/* @var $this DraftPlayerController */
/* @var $model DraftPlayer */

$this->breadcrumbs=array(
	'Draft Players'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List DraftPlayer', 'url'=>array('index')),
	array('label'=>'Create DraftPlayer', 'url'=>array('create')),
	array('label'=>'Update DraftPlayer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DraftPlayer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DraftPlayer', 'url'=>array('admin')),
);
?>

<h1>View DraftPlayer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Name',
		'School',
		'Year',
		'Height_ft',
		'Height_in',
		'Weight',
		'dash',
		'est_round',
		'est_pick',
		'position',
		'height',
	),
)); ?>

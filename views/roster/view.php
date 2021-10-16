<?php
/* @var $this RosterController */
/* @var $model Roster */

$this->breadcrumbs=array(
	'Rosters'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Roster', 'url'=>array('index')),
	array('label'=>'Create Roster', 'url'=>array('create')),
	array('label'=>'Update Roster', 'url'=>array('update', 'id'=>$model->Name)),
	array('label'=>'Delete Roster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Roster', 'url'=>array('admin')),
);
?>

<h1>View Roster #<?php echo $model->Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Number',
		'Name',
		'Age',
		'Pos',
		'G',
		'GS',
		'Wt',
		'Ht',
		'College_Univ',
		'BirthDate',
		'Yrs',
		'AV',
		'Drafted',
		'Team',
	),
)); ?>

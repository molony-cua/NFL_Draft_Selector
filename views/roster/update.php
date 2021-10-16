<?php
/* @var $this RosterController */
/* @var $model Roster */

$this->breadcrumbs=array(
	'Rosters'=>array('index'),
	$model->Name=>array('view','id'=>$model->Name),
	'Update',
);

$this->menu=array(
	array('label'=>'List Roster', 'url'=>array('index')),
	array('label'=>'Create Roster', 'url'=>array('create')),
	array('label'=>'View Roster', 'url'=>array('view', 'id'=>$model->Name)),
	array('label'=>'Manage Roster', 'url'=>array('admin')),
);
?>

<h1>Update Roster <?php echo $model->Name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
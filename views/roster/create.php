<?php
/* @var $this RosterController */
/* @var $model Roster */

$this->breadcrumbs=array(
	'Rosters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Roster', 'url'=>array('index')),
	array('label'=>'Manage Roster', 'url'=>array('admin')),
);
?>

<h1>Create Roster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
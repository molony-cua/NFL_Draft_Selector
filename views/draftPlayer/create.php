<?php
/* @var $this DraftPlayerController */
/* @var $model DraftPlayer */

$this->breadcrumbs=array(
	'Draft Players'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DraftPlayer', 'url'=>array('index')),
	array('label'=>'Manage DraftPlayer', 'url'=>array('admin')),
);
?>

<h1>Create DraftPlayer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
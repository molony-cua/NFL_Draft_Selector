<?php
/* @var $this DraftPlayerController */
/* @var $model DraftPlayer */

$this->breadcrumbs=array(
	'Draft Players'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DraftPlayer', 'url'=>array('index')),
	array('label'=>'Create DraftPlayer', 'url'=>array('create')),
	array('label'=>'View DraftPlayer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DraftPlayer', 'url'=>array('admin')),
);
?>

<h1>Update DraftPlayer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this PickPlayerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pick Players',
);

$this->menu=array(
	array('label'=>'Create PickPlayer', 'url'=>array('create')),
	array('label'=>'Manage PickPlayer', 'url'=>array('admin')),
);
?>

<h1>Pick Players</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

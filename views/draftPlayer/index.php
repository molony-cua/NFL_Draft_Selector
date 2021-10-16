<?php
/* @var $this DraftPlayerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Draft Players',
);
?>

<h1>Draft Players</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
)); ?>

<?php
/* @var $this RosterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rosters',
);

?>

<h1>Rosters</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
)); ?>

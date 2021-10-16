<?php
/* @var $this DraftPlayerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Drafted Players',
);
?>

<h1>Drafted Players</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,

'columns'=>array('Name','claimed'),
)); ?>


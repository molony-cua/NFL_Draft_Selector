<?php
/* @var $this TeamWeightsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Team Weights',
);

?>

<h1>Team Weights</h1>

<p>Please click on the link below to view your team's default weights and <br>
be provided with a way of editing them</p>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

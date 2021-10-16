<?php
/* @var $this PickPlayerController */
/* @var $model PickPlayer */

$this->breadcrumbs=array(
	'Pick Players'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Players To Pick', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pick-player-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Find Player to Pick</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<p>Press the pencil to claim the player and type into the text field to find a player</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pick-player-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'Name',
		'School',
		'Year',
		'Weight',
		'dash',
		/*
		'reps',
		'cone',
		'shuttle',
		'vjump',
		'bjump',
		'alength',
		'hlength',
		'est_round',
		'est_pick',
		'position',
		'height',
		'player_weight',
		'claimed',
		*/
		array(
			'class'=>'CButtonColumn',
			'buttons'=>array('delete'=>array('visible'=>'false'),
					 'view'=>array('visible'=>'false'),
					 ),
			),
	),
)); ?>

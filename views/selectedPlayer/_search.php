<?php
/* @var $this SelectedPlayerController */
/* @var $model SelectedPlayer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'School'); ?>
		<?php echo $form->textField($model,'School',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Year'); ?>
		<?php echo $form->textField($model,'Year',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Weight'); ?>
		<?php echo $form->textField($model,'Weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dash'); ?>
		<?php echo $form->textField($model,'dash'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reps'); ?>
		<?php echo $form->textField($model,'reps'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cone'); ?>
		<?php echo $form->textField($model,'cone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shuttle'); ?>
		<?php echo $form->textField($model,'shuttle'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vjump'); ?>
		<?php echo $form->textField($model,'vjump'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bjump'); ?>
		<?php echo $form->textField($model,'bjump'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alength'); ?>
		<?php echo $form->textField($model,'alength'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hlength'); ?>
		<?php echo $form->textField($model,'hlength'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'est_round'); ?>
		<?php echo $form->textField($model,'est_round',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'est_pick'); ?>
		<?php echo $form->textField($model,'est_pick'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'player_weight'); ?>
		<?php echo $form->textField($model,'player_weight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this DraftPlayerController */
/* @var $model DraftPlayer */
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
		<?php echo $form->label($model,'Height_ft'); ?>
		<?php echo $form->textField($model,'Height_ft'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Height_in'); ?>
		<?php echo $form->textField($model,'Height_in'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
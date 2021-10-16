<?php
/* @var $this RosterController */
/* @var $model Roster */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Number'); ?>
		<?php echo $form->textField($model,'Number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Age'); ?>
		<?php echo $form->textField($model,'Age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pos'); ?>
		<?php echo $form->textField($model,'Pos',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G'); ?>
		<?php echo $form->textField($model,'G'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GS'); ?>
		<?php echo $form->textField($model,'GS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Wt'); ?>
		<?php echo $form->textField($model,'Wt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ht'); ?>
		<?php echo $form->textField($model,'Ht',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'College_Univ'); ?>
		<?php echo $form->textField($model,'College_Univ',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BirthDate'); ?>
		<?php echo $form->textField($model,'BirthDate',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Yrs'); ?>
		<?php echo $form->textField($model,'Yrs',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AV'); ?>
		<?php echo $form->textField($model,'AV'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Drafted'); ?>
		<?php echo $form->textField($model,'Drafted',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Team'); ?>
		<?php echo $form->textField($model,'Team',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this RosterController */
/* @var $model Roster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roster-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Number'); ?>
		<?php echo $form->textField($model,'Number'); ?>
		<?php echo $form->error($model,'Number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Age'); ?>
		<?php echo $form->textField($model,'Age'); ?>
		<?php echo $form->error($model,'Age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pos'); ?>
		<?php echo $form->textField($model,'Pos',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'Pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G'); ?>
		<?php echo $form->textField($model,'G'); ?>
		<?php echo $form->error($model,'G'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GS'); ?>
		<?php echo $form->textField($model,'GS'); ?>
		<?php echo $form->error($model,'GS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Wt'); ?>
		<?php echo $form->textField($model,'Wt'); ?>
		<?php echo $form->error($model,'Wt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ht'); ?>
		<?php echo $form->textField($model,'Ht',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'Ht'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'College_Univ'); ?>
		<?php echo $form->textField($model,'College_Univ',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'College_Univ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BirthDate'); ?>
		<?php echo $form->textField($model,'BirthDate',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'BirthDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Yrs'); ?>
		<?php echo $form->textField($model,'Yrs',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'Yrs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AV'); ?>
		<?php echo $form->textField($model,'AV'); ?>
		<?php echo $form->error($model,'AV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Drafted'); ?>
		<?php echo $form->textField($model,'Drafted',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Drafted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Team'); ?>
		<?php echo $form->textField($model,'Team',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'Team'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
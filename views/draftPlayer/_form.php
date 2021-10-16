<?php
/* @var $this DraftPlayerController */
/* @var $model DraftPlayer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'draft-player-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'School'); ?>
		<?php echo $form->textField($model,'School',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'School'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Year'); ?>
		<?php echo $form->textField($model,'Year',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'Year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Height_ft'); ?>
		<?php echo $form->textField($model,'Height_ft'); ?>
		<?php echo $form->error($model,'Height_ft'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Height_in'); ?>
		<?php echo $form->textField($model,'Height_in'); ?>
		<?php echo $form->error($model,'Height_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Weight'); ?>
		<?php echo $form->textField($model,'Weight'); ?>
		<?php echo $form->error($model,'Weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dash'); ?>
		<?php echo $form->textField($model,'dash'); ?>
		<?php echo $form->error($model,'dash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'est_round'); ?>
		<?php echo $form->textField($model,'est_round',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'est_round'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'est_pick'); ?>
		<?php echo $form->textField($model,'est_pick'); ?>
		<?php echo $form->error($model,'est_pick'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
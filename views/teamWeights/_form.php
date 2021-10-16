<?php
/* @var $this TeamWeightsController */
/* @var $model TeamWeights */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'team-weights-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DE'); ?>
		<?php echo $form->textField($model,'DE'); ?>
		<?php echo $form->error($model,'DE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DT'); ?>
		<?php echo $form->textField($model,'DT'); ?>
		<?php echo $form->error($model,'DT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FB'); ?>
		<?php echo $form->textField($model,'FB'); ?>
		<?php echo $form->error($model,'FB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FS'); ?>
		<?php echo $form->textField($model,'FS'); ?>
		<?php echo $form->error($model,'FS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ILB'); ?>
		<?php echo $form->textField($model,'ILB'); ?>
		<?php echo $form->error($model,'ILB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'K'); ?>
		<?php echo $form->textField($model,'K'); ?>
		<?php echo $form->error($model,'K'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LS'); ?>
		<?php echo $form->textField($model,'LS'); ?>
		<?php echo $form->error($model,'LS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OG'); ?>
		<?php echo $form->textField($model,'OG'); ?>
		<?php echo $form->error($model,'OG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OLB'); ?>
		<?php echo $form->textField($model,'OLB'); ?>
		<?php echo $form->error($model,'OLB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OT'); ?>
		<?php echo $form->textField($model,'OT'); ?>
		<?php echo $form->error($model,'OT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P'); ?>
		<?php echo $form->textField($model,'P'); ?>
		<?php echo $form->error($model,'P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QB'); ?>
		<?php echo $form->textField($model,'QB'); ?>
		<?php echo $form->error($model,'QB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RB'); ?>
		<?php echo $form->textField($model,'RB'); ?>
		<?php echo $form->error($model,'RB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SS'); ?>
		<?php echo $form->textField($model,'SS'); ?>
		<?php echo $form->error($model,'SS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TE'); ?>
		<?php echo $form->textField($model,'TE'); ?>
		<?php echo $form->error($model,'TE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WR'); ?>
		<?php echo $form->textField($model,'WR'); ?>
		<?php echo $form->error($model,'WR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C'); ?>
		<?php echo $form->textField($model,'C'); ?>
		<?php echo $form->error($model,'C'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CB'); ?>
		<?php echo $form->textField($model,'CB'); ?>
		<?php echo $form->error($model,'CB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RT'); ?>
		<?php echo $form->textField($model,'RT'); ?>
		<?php echo $form->error($model,'RT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LT'); ?>
		<?php echo $form->textField($model,'LT'); ?>
		<?php echo $form->error($model,'LT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MLB'); ?>
		<?php echo $form->textField($model,'MLB'); ?>
		<?php echo $form->error($model,'MLB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LG'); ?>
		<?php echo $form->textField($model,'LG'); ?>
		<?php echo $form->error($model,'LG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RG'); ?>
		<?php echo $form->textField($model,'RG'); ?>
		<?php echo $form->error($model,'RG'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
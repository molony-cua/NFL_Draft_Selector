<?php
/* @var $this DSSController */

$this->breadcrumbs=array(
	'Dss',
);
$this->menu=array(
	array('label'=>'Create DraftPlayer', 'url'=>array('claim')),
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>Please insert the current draft pick number</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm'); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
	</div>

	<div class="row submit">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->




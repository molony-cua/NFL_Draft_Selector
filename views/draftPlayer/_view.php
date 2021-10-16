<?php
/* @var $this DraftPlayerController */
/* @var $data DraftPlayer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('School')); ?>:</b>
	<?php echo CHtml::encode($data->School); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Year')); ?>:</b>
	<?php echo CHtml::encode($data->Year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Height_ft')); ?>:</b>
	<?php echo CHtml::encode($data->Height_ft); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Height_in')); ?>:</b>
	<?php echo CHtml::encode($data->Height_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Weight')); ?>:</b>
	<?php echo CHtml::encode($data->Weight); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dash')); ?>:</b>
	<?php echo CHtml::encode($data->dash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('est_round')); ?>:</b>
	<?php echo CHtml::encode($data->est_round); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('est_pick')); ?>:</b>
	<?php echo CHtml::encode($data->est_pick); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	*/ ?>

</div>
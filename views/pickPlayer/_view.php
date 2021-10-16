<?php
/* @var $this PickPlayerController */
/* @var $data PickPlayer */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Weight')); ?>:</b>
	<?php echo CHtml::encode($data->Weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dash')); ?>:</b>
	<?php echo CHtml::encode($data->dash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reps')); ?>:</b>
	<?php echo CHtml::encode($data->reps); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cone')); ?>:</b>
	<?php echo CHtml::encode($data->cone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shuttle')); ?>:</b>
	<?php echo CHtml::encode($data->shuttle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vjump')); ?>:</b>
	<?php echo CHtml::encode($data->vjump); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bjump')); ?>:</b>
	<?php echo CHtml::encode($data->bjump); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alength')); ?>:</b>
	<?php echo CHtml::encode($data->alength); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hlength')); ?>:</b>
	<?php echo CHtml::encode($data->hlength); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('player_weight')); ?>:</b>
	<?php echo CHtml::encode($data->player_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('claimed')); ?>:</b>
	<?php echo CHtml::encode($data->claimed); ?>
	<br />

	*/ ?>

</div>
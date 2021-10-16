<?php
/* @var $this TeamWeightsController */
/* @var $data TeamWeights */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('team')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->team), array('view', 'id'=>$data->team)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DE')); ?>:</b>
	<?php echo CHtml::encode($data->DE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DT')); ?>:</b>
	<?php echo CHtml::encode($data->DT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FB')); ?>:</b>
	<?php echo CHtml::encode($data->FB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FS')); ?>:</b>
	<?php echo CHtml::encode($data->FS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ILB')); ?>:</b>
	<?php echo CHtml::encode($data->ILB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('K')); ?>:</b>
	<?php echo CHtml::encode($data->K); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('LS')); ?>:</b>
	<?php echo CHtml::encode($data->LS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OG')); ?>:</b>
	<?php echo CHtml::encode($data->OG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OLB')); ?>:</b>
	<?php echo CHtml::encode($data->OLB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OT')); ?>:</b>
	<?php echo CHtml::encode($data->OT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P')); ?>:</b>
	<?php echo CHtml::encode($data->P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QB')); ?>:</b>
	<?php echo CHtml::encode($data->QB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RB')); ?>:</b>
	<?php echo CHtml::encode($data->RB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SS')); ?>:</b>
	<?php echo CHtml::encode($data->SS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TE')); ?>:</b>
	<?php echo CHtml::encode($data->TE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WR')); ?>:</b>
	<?php echo CHtml::encode($data->WR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C')); ?>:</b>
	<?php echo CHtml::encode($data->C); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CB')); ?>:</b>
	<?php echo CHtml::encode($data->CB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RT')); ?>:</b>
	<?php echo CHtml::encode($data->RT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LT')); ?>:</b>
	<?php echo CHtml::encode($data->LT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MLB')); ?>:</b>
	<?php echo CHtml::encode($data->MLB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LG')); ?>:</b>
	<?php echo CHtml::encode($data->LG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RG')); ?>:</b>
	<?php echo CHtml::encode($data->RG); ?>
	<br />

	*/ ?>

</div>
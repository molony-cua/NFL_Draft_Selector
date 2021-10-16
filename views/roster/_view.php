<?php
/* @var $this RosterController */
/* @var $data Roster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Name), array('view', 'id'=>$data->Name)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Number')); ?>:</b>
	<?php echo CHtml::encode($data->Number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Age')); ?>:</b>
	<?php echo CHtml::encode($data->Age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pos')); ?>:</b>
	<?php echo CHtml::encode($data->Pos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('G')); ?>:</b>
	<?php echo CHtml::encode($data->G); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GS')); ?>:</b>
	<?php echo CHtml::encode($data->GS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Wt')); ?>:</b>
	<?php echo CHtml::encode($data->Wt); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Ht')); ?>:</b>
	<?php echo CHtml::encode($data->Ht); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('College_Univ')); ?>:</b>
	<?php echo CHtml::encode($data->College_Univ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BirthDate')); ?>:</b>
	<?php echo CHtml::encode($data->BirthDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Yrs')); ?>:</b>
	<?php echo CHtml::encode($data->Yrs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AV')); ?>:</b>
	<?php echo CHtml::encode($data->AV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Drafted')); ?>:</b>
	<?php echo CHtml::encode($data->Drafted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Team')); ?>:</b>
	<?php echo CHtml::encode($data->Team); ?>
	<br />

	*/ ?>

</div>
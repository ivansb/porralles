<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team1Id')); ?>:</b>
	<?php echo CHtml::encode($data->team1Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('team2Id')); ?>:</b>
	<?php echo CHtml::encode($data->team2Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournamentId')); ?>:</b>
	<?php echo CHtml::encode($data->tournamentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goals1')); ?>:</b>
	<?php echo CHtml::encode($data->goals1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goals2')); ?>:</b>
	<?php echo CHtml::encode($data->goals2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />

	*/ ?>

</div>
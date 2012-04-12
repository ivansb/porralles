<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drawId')); ?>:</b>
	<?php echo CHtml::encode($data->drawId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gameId')); ?>:</b>
	<?php echo CHtml::encode($data->gameId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goals1')); ?>:</b>
	<?php echo CHtml::encode($data->goals1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goals2')); ?>:</b>
	<?php echo CHtml::encode($data->goals2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />


</div>
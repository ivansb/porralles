<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tournamentId')); ?>:</b>
	<?php echo CHtml::encode($data->tournamentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('repeats')); ?>:</b>
	<?php echo CHtml::encode($data->repeats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lot')); ?>:</b>
	<?php echo CHtml::encode($data->lot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />


</div>
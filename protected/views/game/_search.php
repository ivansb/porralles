<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team1Id'); ?>
		<?php echo $form->textField($model,'team1Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'team2Id'); ?>
		<?php echo $form->textField($model,'team2Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tournamentId'); ?>
		<?php echo $form->textField($model,'tournamentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goals1'); ?>
		<?php echo $form->textField($model,'goals1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goals2'); ?>
		<?php echo $form->textField($model,'goals2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdAt'); ?>
		<?php echo $form->textField($model,'createdAt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'game-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'team1Id'); ?>
		<?php echo $form->textField($model,'team1Id'); ?>
		<?php echo $form->error($model,'team1Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team2Id'); ?>
		<?php echo $form->textField($model,'team2Id'); ?>
		<?php echo $form->error($model,'team2Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tournamentId'); ?>
		<?php echo $form->textField($model,'tournamentId'); ?>
		<?php echo $form->error($model,'tournamentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goals1'); ?>
		<?php echo $form->textField($model,'goals1'); ?>
		<?php echo $form->error($model,'goals1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goals2'); ?>
		<?php echo $form->textField($model,'goals2'); ?>
		<?php echo $form->error($model,'goals2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdAt'); ?>
		<?php echo $form->textField($model,'createdAt'); ?>
		<?php echo $form->error($model,'createdAt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'draw-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tournamentId'); ?>
		<?php echo $form->textField($model,'tournamentId'); ?>
		<?php echo $form->error($model,'tournamentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'repeats'); ?>
		<?php echo $form->textField($model,'repeats'); ?>
		<?php echo $form->error($model,'repeats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lot'); ?>
		<?php echo $form->textField($model,'lot'); ?>
		<?php echo $form->error($model,'lot'); ?>
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
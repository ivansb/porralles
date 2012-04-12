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
		<?php echo $form->label($model,'userId'); ?>
		<?php echo $form->textField($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drawId'); ?>
		<?php echo $form->textField($model,'drawId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gameId'); ?>
		<?php echo $form->textField($model,'gameId'); ?>
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
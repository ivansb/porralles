<?php
$this->breadcrumbs=array(
	'Participants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Participant', 'url'=>array('index')),
	array('label'=>'Create Participant', 'url'=>array('create')),
	array('label'=>'Update Participant', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Participant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participant', 'url'=>array('admin')),
);
?>

<h1>View Participant #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'userId',
		'drawId',
		'createdAt',
	),
)); ?>

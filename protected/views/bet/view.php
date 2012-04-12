<?php
$this->breadcrumbs=array(
	'Bets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bet', 'url'=>array('index')),
	array('label'=>'Create Bet', 'url'=>array('create')),
	array('label'=>'Update Bet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bet', 'url'=>array('admin')),
);
?>

<h1>View Bet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'userId',
		'drawId',
		'gameId',
		'goals1',
		'goals2',
		'createdAt',
	),
)); ?>

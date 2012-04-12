<?php
$this->breadcrumbs=array(
	'Draws'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Draw', 'url'=>array('index')),
	array('label'=>'Create Draw', 'url'=>array('create')),
	array('label'=>'Update Draw', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Draw', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Draw', 'url'=>array('admin')),
);
?>

<h1>View Draw #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'tournamentId',
		'repeats',
		'lot',
		'createdAt',
	),
)); ?>

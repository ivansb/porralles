<?php
$this->breadcrumbs=array(
	'Bets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bet', 'url'=>array('index')),
	array('label'=>'Create Bet', 'url'=>array('create')),
	array('label'=>'View Bet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bet', 'url'=>array('admin')),
);
?>

<h1>Update Bet <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
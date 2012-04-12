<?php
$this->breadcrumbs=array(
	'Bets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bet', 'url'=>array('index')),
	array('label'=>'Manage Bet', 'url'=>array('admin')),
);
?>

<h1>Create Bet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
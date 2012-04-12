<?php
$this->breadcrumbs=array(
	'Participants'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participant', 'url'=>array('index')),
	array('label'=>'Create Participant', 'url'=>array('create')),
	array('label'=>'View Participant', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Participant', 'url'=>array('admin')),
);
?>

<h1>Update Participant <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
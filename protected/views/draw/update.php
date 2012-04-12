<?php
$this->breadcrumbs=array(
	'Draws'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Draw', 'url'=>array('index')),
	array('label'=>'Create Draw', 'url'=>array('create')),
	array('label'=>'View Draw', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Draw', 'url'=>array('admin')),
);
?>

<h1>Update Draw <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
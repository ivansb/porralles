<?php
$this->breadcrumbs=array(
	'Tournaments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tournament', 'url'=>array('index')),
	array('label'=>'Manage Tournament', 'url'=>array('admin')),
);
?>

<h1>Create Tournament</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Draws'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Draw', 'url'=>array('index')),
	array('label'=>'Manage Draw', 'url'=>array('admin')),
);
?>

<h1>Create Draw</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
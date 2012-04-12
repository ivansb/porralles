<?php
$this->breadcrumbs=array(
	'Draws',
);

$this->menu=array(
	array('label'=>'Create Draw', 'url'=>array('create')),
	array('label'=>'Manage Draw', 'url'=>array('admin')),
);
?>

<h1>Draws</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

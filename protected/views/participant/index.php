<?php
$this->breadcrumbs=array(
	'Participants',
);

$this->menu=array(
	array('label'=>'Create Participant', 'url'=>array('create')),
	array('label'=>'Manage Participant', 'url'=>array('admin')),
);
?>

<h1>Participants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

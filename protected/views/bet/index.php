<?php
$this->breadcrumbs=array(
	'Bets',
);

$this->menu=array(
	array('label'=>'Create Bet', 'url'=>array('create')),
	array('label'=>'Manage Bet', 'url'=>array('admin')),
);
?>

<h1>Bets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

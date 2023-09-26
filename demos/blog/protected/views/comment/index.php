<?php
$this->breadcrumbs=array(
	'Comentários',
);
?>

<h1>Comentários</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

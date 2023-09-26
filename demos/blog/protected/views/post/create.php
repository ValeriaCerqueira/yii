<?php
$this->breadcrumbs=array(
	'Create Post',
);
?>
<h1>Faça um post</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
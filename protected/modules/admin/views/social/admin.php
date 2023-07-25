<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs=array(
	'Socials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Social', 'url'=>array('index')),
	array('label'=>'Create Social', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#social-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Socials</h1>

<div class="create d-flex justify-content-end" >
    <a class="btn btn-primary" style="width: 200px" href="<?=Yii::app()->createAbsoluteUrl('/admin/social/create')?>">Qo'shish</a>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'social-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'icon',
		'link',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

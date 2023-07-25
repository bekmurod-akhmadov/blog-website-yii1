<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage News</h1>

<div class="create d-flex justify-content-end" >
    <a class="btn btn-primary" style="width: 200px" href="<?=Yii::app()->createAbsoluteUrl('/admin/news/create')?>">Qo'shish</a>
</div>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        'id',
		'title',
		'image',
        'category_id',
//		array(
//
//            'content' => function($model){
//                $item = Category::model()->findByPk(array('id' => $model->category_id));
//                return $item->name;
//            },
//        ),
		'created_at',
		/*
		'updated_date',
		'seen_count',
		'author_id',
		'banner_id',
		'status',
		'body',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

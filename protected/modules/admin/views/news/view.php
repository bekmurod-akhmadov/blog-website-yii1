<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<a href="<?=Yii::app()->createAbsoluteUrl('/admin/news/admin')?>" class="btn btn-primary my-3">Menularga qaytish</a>
<a href="<?=Yii::app()->createAbsoluteUrl('/admin/news/update' , array('id' => $model->id))?>" class="btn btn-secondary my-3">Tahrirlash</a>
<h1>View News #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'image',
		'category_id',
		'created_at',
		'updated_date',
		'seen_count',
		'author_id',
		'banner_id',
		'status',
		'body',
	),
)); ?>

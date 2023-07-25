<?php
/* @var $this SocialController */
/* @var $model Social */

$this->breadcrumbs=array(
	'Socials'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Social', 'url'=>array('index')),
	array('label'=>'Create Social', 'url'=>array('create')),
	array('label'=>'Update Social', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Social', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Social', 'url'=>array('admin')),
);
?>

<h1>View Social #<?php echo $model->id; ?></h1>

<a href="<?=Yii::app()->createAbsoluteUrl('/admin/social/admin')?>" class="btn btn-primary my-3">Menularga qaytish</a>
<a href="<?=Yii::app()->createAbsoluteUrl('/admin/social/update' , array('id' => $model->id))?>" class="btn btn-secondary my-3">Tahrirlash</a>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'icon',
		'link',
		'status',
	),
)); ?>

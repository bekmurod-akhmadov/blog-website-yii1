<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menus'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'Update Menu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<h1>View Menu #<?php echo $model->id; ?></h1>

<a href="<?=Yii::app()->createAbsoluteUrl('/admin/menu/admin')?>" class="btn btn-primary my-3">Menularga qaytish</a>
<a href="<?=Yii::app()->createAbsoluteUrl('/admin/menu/update' , array('id' => $model->id))?>" class="btn btn-secondary my-3">Tahrirlash</a>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'parent',
		'order_by',
		'position',
		'link',
		'status',
	),
)); ?>

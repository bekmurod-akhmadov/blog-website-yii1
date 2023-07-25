<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('application.widgets.newsArea.NewsArea'); ?>
<?php $this->widget('application.widgets.popular.Popular'); ?>
<?php $this->widget('application.widgets.technology.Technology'); ?>
<?php $this->widget('application.widgets.all.AllNews'); ?>
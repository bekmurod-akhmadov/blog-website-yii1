<?php $this->pageTitle = !empty($category->name) ? 'Yangiliklar | ' . $category->name : $search ?>
<?php if (!empty($models)): ?>
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2><?=!empty($category->name) ? $category->name : $search ?></h2>

            <ul>
                <li><a href="/"><i class="icofont-home"></i> Asosiy</a></li>
                <li><i class="icofont-rounded-right"></i></li>
                <li><?=!empty($category->name) ? $category->name : $search?></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Video News Area -->
<section class="video-news-area ptb-40">
    <div class="container">
        <div class="row">


                <?php foreach ($models as $model): ?>
                    <?php
                        $image = StaticFunctions::getImage($model->id , $model->image , 'news');
                        $category = Category::model()->findByAttributes(array('id' => $model->category_id));
                        $month_format = date('F' , strtotime($model->created_at));
                        $date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at)) ;
                        $author = Admin::model()->findByAttributes(array('id' => $model->author_id))->username;

                    ?>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-default-news">
                            <img src="<?=$image?>" alt="image">

                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a ><?=$author?></a></li>
                                    <li><i class="icofont-calendar"></i><?=$date?></li>
                                </ul>
                                <h3><a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $model->slug_title))?>"><?=$model->title?></a></h3>
                            </div>

                            <div class="tags">
                                <a href="<?=Yii::app()->createAbsoluteUrl('news/category' , array('id' => $category->id))?>"><?=$category->name?></a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>



    </div>
</section>
<!-- End Video News Area -->

<?php $this->widget('application.widgets.all.AllNews'); ?>

<?php else: ?>
<div class="container text-center my-4">
    <h4 class="alert alert-warning">Hech nima topilmadi</h4>
    <a href="<?=Yii::app()->createAbsoluteUrl('/')?>" class="btn btn-danger">Asosiy sahifaga qaytish</a>
</div>
<?php endif; ?>
<section class="new-news-area bg-color-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="new-news-slides-two new-news-slides owl-carousel owl-theme">
                    <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <?php
                            $image = StaticFunctions::getImage($model->id , $model->image , 'news');
                            $month_format = date('F' , strtotime($model->created_at));
                            $category = Category::model()->findByAttributes(array('id' => $model->category_id));
                            $date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at));
                            $author = Admin::model()->findByAttributes(array('id' => $model->author_id));
                        ?>
                        <div class="single-default-news">
                            <img style="width: 1296px;height: 648px;object-fit: cover;" src="<?=$image?>" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a><?=$author->username?></a></li>
                                    <li><i class="icofont-calendar"></i><?=$date?></li>
                                </ul>
                                <h3><a href="<?=Yii::app()->createAbsoluteUrl('news/view' , array('slug' => $model->slug_title))?>"><?=$model->title?></a></h3>
                            </div>
                            <div class="tags"><a href="<?=Yii::app()->createAbsoluteUrl('news/category' , array('id' => $model->category_id))?>"><?=$category->name?></a></div>
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-news-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="popular-section-ads">
                    <a href="#"><img src="/assets/img/2-ads.png" alt="image" /></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="section-title"><h2>So'nggi yangiliklar</h2></div>
                <div class="row">
                    <div class="popular-news-slides owl-carousel owl-theme">
                        <?php if (!empty($models)):?>
                        <?php foreach ($models as $model): ?>
                            <?php
                                $image = StaticFunctions::getImage($model->id , $model->image , 'news');
                                $category = Category::model()->findByAttributes(array('id' => $model->category_id));
                                $month_format = date('F' , strtotime($model->created_at));
                                $date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at)) ;

                                ?>

                            <div class="col-lg-12 col-md-12">
                                <div class="single-popular-news">
                                    <div style="width: 302px;height: 227px;object-fit: cover;" class="news-image"><img src="<?=$image?>" alt="<?=$model->title?>" /></div>
                                    <div class="news-content">
                                        <h3><?=StaticFunctions::getOfPartText($model->title , 90)?></h3>
                                        <span><i class="icofont-calendar"></i><?=$date?></span>
                                    </div>
                                    <a href="<?=Yii::app()->createAbsoluteUrl('news/view' , array('slug' => $model->slug_title))?>" class="link-overlay"></a>
                                    <div class="tags bg-2"><a href="<?=Yii::app()->createAbsoluteUrl('news/view' , array('slug' => $model->slug_title))?>"><?=$category->name?></a></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
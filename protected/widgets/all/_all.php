<section class="all-category-news ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="section-title"><h2>Barcha yangiliklar</h2></div>
                <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                        <?php
                        $image = StaticFunctions::getImage($model->id , $model->image , 'news');
                        $category = Category::model()->findByAttributes(array('id' => $model->category_id));
                        $month_format = date('F' , strtotime($model->created_at));
                        $date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at)) ;

                        ?>
                    <div class="single-category-news">
                        <div class="row m-0 align-items-center">
                            <div class="col-lg-5 col-md-6 p-0">
                                <div class="category-news-image">
                                    <a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $model->slug_title))?>"><img src="<?=$image?>" alt="image" /></a>
                                    <div class="tags"><a href="<?=Yii::app()->createAbsoluteUrl('/news/category' , array('id' => $category->id))?>"><?=$category->name?></a></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="category-news-content">
                                    <span><i class="icofont-calendar"></i> <?=$date?></span>
                                    <h3><a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $model->slug_title))?>"><?=$model->title?></a></h3>
                                    <p><?=StaticFunctions::getOfPartText($model->description , 300)?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>

                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="icofont-double-left"></i></a> <a href="#" class="page-numbers">1</a> <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a> <a href="#" class="page-numbers">4</a> <a href="#" class="next page-numbers"><i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="stay-connected-ads">
                    <a href="#"><img src="/assets/img/3-ads.png" alt="image" /></a>
                </div>
                <div class="featured-news">
                    <div class="section-title"><h2>Tavsiya etilgan yangiliklar</h2></div>
                    <?php if (!empty($models)): ?>
                        <?php foreach ($models as $model): ?>
                            <?php
                            $image = StaticFunctions::getImage($model->id , $model->image , 'news');
                            $category = Category::model()->findByAttributes(array('id' => $model->category_id));
                            $month_format = date('F' , strtotime($model->created_at));
                            $date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at)) ;
                            $author = Admin::model()->findByAttributes(array('id' => $model->author_id));

                            ?>
                        <div class="single-featured-news">
                            <img src="<?=$image?>" alt="image" />
                            <div class="news-content">
                                <ul>
                                    <li><i class="icofont-user-suited"></i> by <a><?=$author->username?></a></li>
                                    <li><i class="icofont-calendar"></i> <?=$date?></li>
                                </ul>
                                <h3><a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $model->slug_title))?>"><?=$model->title?></a></h3>
                            </div>
                            <div class="tags"><a href="<?=Yii::app()->createAbsoluteUrl('/news/category' , array('id' => $category->id))?>"><?=$category->name?></a></div>
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>
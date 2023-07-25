<section class="technology-area pb-40">
    <div class="container">
        <div class="section-title"><h2>O'zbekiston</h2></div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <?php if (!empty($item)): ?>
                    <?php
                        $image = StaticFunctions::getImage($item->id , $item->image , 'news');
                        $category = Category::model()->findByAttributes(array('id' => $item->category_id));
                        $month_format = date('F' , strtotime($item->created_at));
                        $date = date('d-' , strtotime($item->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($item->created_at)) ;
                        $commentCount = Comment::model()->countByAttributes(array('news_id' => $item->id));
                        $author = Admin::model()->findByAttributes(array('id' => $item->author_id));

                    ?>
                    <div class="single-technology-news">
                        <img src="<?=$image?>" alt="image" />
                        <div class="news-content">
                            <ul>
                                <li><i class="icofont-user-suited"></i> by <a href="#"><?=$author->username?></a></li>
                                <li><i class="icofont-calendar"></i><?=$date?></li>
                            </ul>
                            <h3><a href="<?=Yii::app()->createAbsoluteUrl('news/view' , array('slug' => $item->slug_title))?>"><?=$item->title?></a></h3>
                        </div>
                        <div class="tags"><a href="<?=Yii::app()->createAbsoluteUrl('/news/category' , array('id' => $category->id))?>"><?=$category->name?></a></div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="space-news-list">
                    <?php if (!empty($models)): ?>
                        <?php foreach ($models as $model): ?>
                        <?php
                            $category = Category::model()->findByAttributes(array('id' => $model->category_id));
                            $month_format = date('F' , strtotime($model->created_at));
                            $date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at)) ;
                            $commentCount = Comment::model()->countByAttributes(array('news_id' => $model->id));
                        ?>
                            <div class="single-space-news">
                                <h3><a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $model->slug_title))?>"><?=$model->title?></a></h3>
                                <ul>
                                    <li><i class="icofont-calendar"> </i> <?=$date?> </li>
                                    <li><i class="icofont-tag"></i> <a href="<?=Yii::app()->createAbsoluteUrl('/news/category' , array('id' => $category->id))?>"><?=$category->name?></a></li>
                                    <li><i class="icofont-speech-comments"></i><?=$commentCount?><a href="#"><??></a></li>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="technology-section-ads">
                    <a href="#"><img src="/assets/img/6-ads.png" alt="image" /></a>
                </div>
            </div>
        </div>
    </div>
</section>
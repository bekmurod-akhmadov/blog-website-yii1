<?php
$this->pageTitle = $model->title;
$image = StaticFunctions::getImage($model->id , $model->image , 'news');
$category = Category::model()->findByAttributes(array('id' => $model->category_id));
$month_format = date('F' , strtotime($model->created_at));
$date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at)) ;
$author = Admin::model()->findByAttributes(array('id' => $model->author_id));

?>
<!-- Start News Details Area -->
<section class="news-details-area pb-40">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?=Yii::app()->createAbsoluteUrl('/')?>"><i class="icofont-home"></i> Asosiy</a></li>
            <li><i class="icofont-rounded-right"></i></li>
            <li><a href="<?=Yii::app()->createAbsoluteUrl('/news/category' , array('id'=>$category->id))?>"><?=(!empty($category) ? $category->name : '')?></a></li>
            <li><i class="icofont-rounded-right"></i></li>
            <li><?=$model->title?></li>
        </ul>

        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="news-details">
                    <div class="article-img">
                        <img style="width: 100%;height: 450px;object-fit: cover;" src="<?=$image?>" alt="image">
                    </div>

                    <div class="article-content">
                        <ul class="entry-meta">
                            <li><i class="icofont-user"></i> <a href="#"><?=$author->username?></a></li>
                            <li><i class="icofont-eye-alt"></i> <?=!empty($model->seen_count) ? $model->seen_count : '0'?></li>
                            <li><i class="icofont-calendar"></i><?=$date?></li>
                        </ul>

                        <h3><?=$model->title?></h3>
                        <p style="text-align: justify;font-size: 17px;color: #555"><?=$model->body?></p>
                    </div>
                </div>

                <div class="comments-area">
                    <h3 class="comments-title"><?=!empty($commentCount) ? $commentCount : '0'?> Izohlar:</h3>

                    <ol class="comment-list">
                        <li class="comment">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img src="/assets/img/author1.jpg" class="avatar" alt="image">
                                        <b class="fn">Sinmun</b>
                                        <span class="says">says:</span>
                                    </div>

                                    <div class="comment-metadata">
                                        <a href="">
                                            <time>April 24, 2021 at 10:59 am</time>
                                        </a>
                                    </div>
                                </footer>

                                <div class="comment-content">
                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>

                                <div class="reply">
                                    <a href="#" class="comment-reply-link">Reply</a>
                                </div>
                            </article>  
                        </li>
                    </ol>

                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Izoh qoldirish</h3>

                        <?php $form = $this->beginWidget( 'CActiveForm' , array(
                            'id'=>'comment-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                            ),
                        )) ?>
                            <p class="comment-form-comment">
                                <label for="comment">Izoh</label>
                                <?=$form->textArea($comment , 'comment' , array('cols' => 45 , 'rows' => 5 , 'maxlength' => 1000))?>
                                <?=$form->error($model , 'comment')?>
                            </p>
                            <p class="comment-form-author">
                                <label for="name">Ismingiz<span class="required">*</span></label>
                                <?=$form->textField($comment , 'username')?>
                                <?=$form->error($comment , 'username')?>
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <?=$form->emailField($comment , 'email')?>
                                <?=$form->error($comment , 'email')?>
                            </p>
                            <p class="form-submit">
                                <button>Izoh qoldirish</button>
                            </p>
                        <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">

                    <section class="widget widget_recent_entries">
                        <h3 class="widget-title">Oxirgi Yangiliklar</h3>
                        <?php if (!empty($recomends)): ?>
                            <ul>
                                <?php foreach ($recomends as $recomend): ?>
                                    <li><a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $recomend->slug_title))?>"><?=$recomend->title?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>



                    </section>

                    <section class="widget widget_categories">
                        <h3 class="widget-title">Yangilik Kategoriyalari</h3>

                        <?php if (!empty($categories)): ?>
                            <ul>
                                <?php foreach ($categories as $categoryItem): ?>
                                    <li><a href="<?=Yii::app()->createAbsoluteUrl('/news/category' , array('id' => $categoryItem->id))?>"><?=$categoryItem->name?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </section>

                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>

                        <div class="tagcloud">
                            <a href="#">Business <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Design <span class="tag-link-count"> (3)</span></a>
                            <a href="#">IT <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Marketing <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Mobile <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Protect <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Startup <span class="tag-link-count"> (1)</span></a>
                            <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End News Details Area -->

<!-- Start More News Area -->
<section class="more-news-area">
    <div class="container">
        <div class="more-news-inner">
            <div class="section-title">
                <h2>Tavsiya qilinganlar</h2>
            </div>

            <div class="row">
                <div class="more-news-slides owl-carousel owl-theme">
                        <?php if (!empty($recomends)): ?>

                            <?php foreach ($recomends as $recomend): ?>

                                <?php
                                    $image = StaticFunctions::getImage($recomend->id , $recomend->image , 'news');
                                    $category = Category::model()->findByAttributes(array('id' => $recomend->category_id));
                                    $month_format = date('F' , strtotime($recomend->created_at));
                                    $date = date('d-' , strtotime($recomend->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($recomend->created_at)) ;
                                    $author = Admin::model()->findByAttributes(array('id' => $recomend->author_id))->username;

                                ?>

                                <div class="col-lg-12 col-md-12">
                                    <div class="single-more-news">
                                        <img src="<?=$image?>" alt="image">

                                        <div class="news-content">
                                            <ul>
                                                <li><i class="icofont-user-suited"></i> by <a><?=$author?></a></li>
                                                <li><i class="icofont-calendar"></i><?=$date?></li>
                                            </ul>
                                            <h3><a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $recomend->slug_title))?>"><?=StaticFunctions::getOfPartText($recomend->title , 70)?></a></h3>
                                        </div>

                                        <div class="tags bg-2">
                                            <a href="<?=Yii::app()->createAbsoluteUrl('/news/category' , array('id' => $category->id))?>"><?=$category->name?></a>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End More News Area -->
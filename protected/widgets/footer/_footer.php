<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h3>About The Magazine</h3>
                    <div class="contact-info">
                        <p>You can reach us via phone, email and website. Or send us some message through our Contact Page.</p>
                        <ul>
                            <li><i class="icofont-google-map"></i> 27 Division St, New York, NY 10002, USA</li>
                            <li><i class="icofont-phone"></i> <a href="#">+(587) 234-4521</a></li>
                            <li><i class="icofont-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="71181f171e3102181f1c041f5f121e1c">[email&#160;protected]</span></a></li>
                        </ul>
                    </div>
                    <div class="connect-social">
                        <p>We're social, connect with us:</p>
                        <ul>
                            <?php if (!empty($socials)): ?>
                                <?php foreach ($socials as $social) :?>
                                    <li>
                                        <a href="<?=$social->link?>" target="_blank"><i class="<?=$social->icon?>"></i></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer-widget">
                    <h3>So'ngi yangiliklar</h3>
                    <div class="footer-latest-news-list">
                        <?php if (!empty($models)): ?>
                        <?php foreach ($models as $model): ?>
                            <?php
                                $image = StaticFunctions::getImage($model->id , $model->image , 'news');
                                $month_format = date('F' , strtotime($model->created_at));
                                $date = date('d-' , strtotime($model->created_at)) . Yii::app()->params['month'][$month_format] . date(', Y' , strtotime($model->created_at)) ;
                                $commentCount = Comment::model()->countByAttributes(array('news_id' => $model->id));
                            ?>
                        <div class="media latest-news-media align-items-center">
                            <a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $model->slug_title))?>"> <img src="<?=$image?>" alt="image" /> </a>
                            <div class="content">
                                <ul>
                                    <li><i class="icofont-calendar"></i><?=$date?></li>
                                    <li>
                                        <a href=""><i class="icofont-comment"></i> <?=!empty($commentCount) ? $commentCount : '0'?></a>
                                    </li>
                                </ul>
                                <h3><a href="<?=Yii::app()->createAbsoluteUrl('/news/view' , array('slug' => $model->slug_title))?>"><?=StaticFunctions::getOfPartText($model->title ,60)?></a></h3>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-footer-widget">
                    <h3>Twitter Feed</h3>
                    <div class="twitter-tweet-list">
                        <div class="single-tweet">
                            <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                            <p>Conference Event WordPress Theme -> 2 New Home Added <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                        </div>
                        <div class="single-tweet">
                            <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                            <p>Conference Event WordPress Theme -> 2 New Home Added <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                        </div>
                        <div class="single-tweet">
                            <i class="icofont-twitter"></i> <span>About 2 days ago</span>
                            <p>Conference Event WordPress Theme -> 2 New Home Added #wordpress #event #conference #wordpresstheme <a href="#">https://tt.co/Rn00zM5q7gY70</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <p>© Sinmun is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="footer-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertisement</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
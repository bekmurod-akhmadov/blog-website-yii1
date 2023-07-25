<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="city-temperature">
                        <i class="icofont-ui-weather"></i> <span>28.5<sup>c</sup></span> <b>Dubai</b>
                    </div>
                    <ul class="top-nav">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertisement</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-4 text-end">
                    <ul class="top-social">
                        <?php if (!empty($socials)): ?>
                            <?php foreach ($socials as $social) :?>
                                <li>
                                    <a href="<?=$social->link?>" target="_blank"><i class="<?=$social->icon?>"></i></a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    <div class="header-date"><i class="icofont-clock-time"></i> Friday, June 15</div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-area">
        <div class="sinmun-mobile-nav">
            <div class="logo">
                <a href="<?=Yii::app()->createAbsoluteUrl('/')?>"><img src="/assets/img/logo.png" alt="logo" /></a>
            </div>
        </div>
        <div class="sinmun-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?=Yii::app()->createAbsoluteUrl('/')?>"><img src="/assets/img/logo.png" alt="logo" /></a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <?php if (!empty($models)): ?>
                            <?php foreach ($models as $model): ?>
                                <?php $childMenus = Menu::model()->findAllByAttributes(array('parent' => $model->id , 'status' => 1)) ?>

                                <?php if (empty($childMenus)): ?>

                                    <li class="nav-item"><a href="<?=$model->link?>" class="nav-link"><?=$model->name?></a></li>

                                <?php else: ?>

                                    <li class="nav-item">
                                        <a href="<?=$model->link?>" class="nav-link active"><?=$model->name?></a>
                                        <ul class="dropdown-menu">
                                            <?php if (!empty($childMenus)): ?>
                                                <?php foreach ($childMenus as $childMenu): ?>
                                                    <li class="nav-item"><a href="<?=$childMenu->link?>" class="nav-link"><?=$childMenu->name?></a></li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </li>

                                <?php endif;?>
                            <?php endforeach; ?>
                            <?php endif; ?>


                        </ul>
                        <div class="others-options">

                            <div class="header-search d-inline-block">
                                <div class="nav-search">
                                    <div class="nav-search-button"><i class="icofont-ui-search"></i></div>
                                    <form action="<?=Yii::app()->createAbsoluteUrl('/news/search')?>">
                                        <span class="nav-search-close-button" tabindex="0">✕</span>
                                        <div class="nav-search-inner"><input name="search" placeholder="Search here...." /></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>


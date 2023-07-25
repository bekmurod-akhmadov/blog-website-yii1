<?php Yii::import('application.components.StaticFunctions'); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=Yii::app()->createAbsoluteUrl('/admin')?>" class="brand-link">
        <img src="/admin-assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin-assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Yangiliklar
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=Yii::app()->createAbsoluteUrl('/admin/news/admin')?>" class="nav-link">
                                <i class="nav-icon fas fa-globe"></i>
                                <p>
                                    Barcha yangiliklar
                                    <span class="badge badge-info right"><?=!empty(StaticFunctions::NewsGetCount()) ? StaticFunctions::NewsGetCount() : '0' ?></span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?=Yii::app()->createAbsoluteUrl('/admin/category/admin')?>" class="nav-link">
                                <i class="nav-icon fas fa-bars"></i>
                                <p>
                                   Yangilik Kategoriyalari
                                    <span class="badge badge-info right"><?=!empty(StaticFunctions::CategoryGetCount()) ? StaticFunctions::CategoryGetCount() : '0' ?></span>
                                </p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?=Yii::app()->createAbsoluteUrl('/admin/menu/admin')?>" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Menular
                            <span class="badge badge-info right"><?=!empty(StaticFunctions::MenuGetCount()) ? StaticFunctions::MenuGetCount() : '0' ?></span>

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?=Yii::app()->createAbsoluteUrl('/admin/social/admin')?>" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Ijtimoiy Tarmoqlar
                            <span class="badge badge-info right"><?=!empty(StaticFunctions::SocialGetCount()) ? StaticFunctions::SocialGetCount() : '0' ?></span>

                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
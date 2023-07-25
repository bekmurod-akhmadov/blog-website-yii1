<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<!-- Start 404 Error Area -->
<section class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="error-content">
                    <div class="notfound-404">
                        <h1>Oops!</h1>
                    </div>
                    <h3>404 - Sahifa topilmadi</h3>
                    <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a href="/" class="btn btn-primary">Asosiy Sahifaga qaytish</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End 404 Error Area -->
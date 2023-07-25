<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/icofont.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/magnific-popup.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/dark.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/responsive.css">
    <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/img/favicon.png" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<?php $this->widget('application.widgets.header.Header'); ?>

	<?php echo $content; ?>
<?php $this->widget('application.widgets.footer.Footer') ?>



<script data-cfasync="false" src="/assets/js/email-decode.min.js">
</script><script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/jquery.meanmenu.js"></script>
<script src="/assets/js/mixitup.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/form-validator.min.js"></script>
<script src="/assets/js/contact-form-script.js"></script>
<script src="/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="/assets/js/main.js"></script>

<style>
    .buy-now-btn{
        display: none !important;
    }
</style>
</body>
</html>

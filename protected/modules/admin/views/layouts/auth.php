<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=Yii::app()->request->baseUrl;?>/admin-assets/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">



    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
           <?=$content?>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>



<script src="/admin-assets/plugins/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha384-tc3TMXCcTCib89yECEQXI4e6DhhlwNrqzYpvyeSqBD2vB/KugQH7o3p+/UtKuS5L" crossorigin="anonymous"></script>
<script src="/admin-assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin-assets/plugins/chart.js/Chart.min.js"></script>
<script src="/admin-assets/plugins/sparklines/sparkline.js"></script>
<script src="/admin-assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin-assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="/admin-assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="/admin-assets/plugins/moment/moment.min.js"></script>
<script src="/admin-assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/admin-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/admin-assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="/admin-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/admin-assets/dist/js/adminlte.js"></script>
<script src="/admin-assets/dist/js/demo.js"></script>
<script src="/admin-assets/dist/js/pages/dashboard.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
</body>
</html>

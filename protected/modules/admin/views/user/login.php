<h3 class="text-center">Login</h3>
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <div class="input-group mb-3">
        <?php echo $form->textField($model,'username' , array('class' => 'form-control')); ?>
        <?php echo $form->error($model,'username'); ?>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <?php echo $form->passwordField($model,'password' , array('class' => 'form-control')); ?>
        <?php echo $form->error($model,'password'); ?>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="icheck-primary">
                <?php echo $form->checkBox($model,'rememberMe' , array('classs' => 'btn-check')); ?>
                <?php echo $form->error($model,'rememberMe'); ?>
                <label for="agreeTerms" style="padding:0 !important;">
                  Remember me
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-12">
            <?php echo CHtml::submitButton('Login' , array('class' => 'btn btn-primary btn-block')); ?>
        </div>
        <!-- /.col -->
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
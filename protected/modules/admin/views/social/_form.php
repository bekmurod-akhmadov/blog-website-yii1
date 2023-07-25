<?php
/* @var $this SocialController */
/* @var $model Social */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'social-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php echo $form->labelEx($model,'name'); ?>
                        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255 , 'class' => 'form-control')); ?>
                        <?php echo $form->error($model,'name'); ?>
                    </div>
                    <div class="row">
                        <?php echo $form->labelEx($model,'link'); ?>
                        <?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255 , 'class' => 'form-control')); ?>
                        <?php echo $form->error($model,'link'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php echo $form->labelEx($model,'icon'); ?>
                        <?php echo $form->textField($model,'icon',array('size'=>60,'maxlength'=>255 , 'class' => 'form-control')); ?>
                        <?php echo $form->error($model,'icon'); ?>
                    </div>
                    <?php
                        $data = Yii::app()->params['status'];
                    ?>
                    <div class="row">
                        <?php echo $form->labelEx($model,'status'); ?>
                        <?php echo $form->dropDownList($model,'status', $data , array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'status'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
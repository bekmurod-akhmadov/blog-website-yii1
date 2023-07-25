<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note"> <span class="required">*</span> bilan ko'rsatilgan maydonlar to'ldirilishi shart</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php echo $form->labelEx($model,'title'); ?>
                        <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255 , 'class' => 'form-control')); ?>
                        <?php echo $form->error($model,'title'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->labelEx($model,'description'); ?>
                        <?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255 , 'class' => 'form-control')); ?>
                        <?php echo $form->error($model,'description'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->labelEx($model,'body'); ?>
                        <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50 , 'class' => 'form-control')); ?>
                        <?php echo $form->error($model,'body'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->labelEx($model,'created_at'); ?>
                        <?php
                            $this->widget('application.extensions.datetimepicker.DateTimePicker', array(
                                'model' => $model,
                                'attribute' => 'created_at', // Замените 'date' на атрибут модели, который должен использоваться для даты

                                'options' => array(
                                    'dateFormat' => 'yy-mm-dd',
                                    'timeFormat' => 'HH:mm:ss',
                                ),
                            ));
                        ?>
                        <?php echo $form->error($model,'created_at'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php echo $form->labelEx($model,'image'); ?>
                        <?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>255 , 'class' => 'form-control' , 'type' => 'file')); ?>
                        <?php echo $form->error($model,'image'); ?>
                    </div>

                    <div class="row">
                        <?php $data = Category::model()->findAllByAttributes(array('status' => 1));
                            $listData = CHtml::listData($data , 'id' , 'name');

                        ?>
                        <?php echo $form->labelEx($model,'category_id'); ?>
                        <?php echo $form->dropDownList($model,'category_id',$listData , array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'category_id'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->labelEx($model,'author_id'); ?>
                        <?php echo $form->textField($model,'author_id' , array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'author_id'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->labelEx($model,'banner_id'); ?>
                        <?php echo $form->textField($model,'banner_id' , array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'banner_id'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->labelEx($model,'status'); ?>
                        <?php echo $form->textField($model,'status' , ['class' => 'form-control']); ?>
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
    <style>
        #News_created_at{
            width: 100%;
        }
    </style>
</div><!-- form -->
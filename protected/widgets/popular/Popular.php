<?php


class Popular extends CWidget
{
    public function run(){
        $models = News::model()->findAllByAttributes(array('status' => 1));
        return $this->render('_popular' , [
            'models' => $models,
        ]);
    }

    public function getViewPath($checkTheme = false)
    {
        return Yii::getPathOfAlias('application.widgets.popular');
    }
}

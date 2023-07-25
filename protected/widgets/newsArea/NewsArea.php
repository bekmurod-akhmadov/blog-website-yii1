<?php


class NewsArea extends CWidget
{
    public function run(){
        $models = News::model()->findAllByAttributes(array('banner_id' => 1));
        return $this->render('_news-area' , [
            'models' => $models,
        ]);
    }

    public function getViewPath($checkTheme = false)
    {
        return Yii::getPathOfAlias('application.widgets.newsArea');
    }

}
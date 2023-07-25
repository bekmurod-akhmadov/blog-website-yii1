<?php


class Technology extends CWidget
{
    public function run()
    {
        $models = News::model()->findAllBySql("select * from news where category_id = 3 limit 3");
        $item = News::model()->findByAttributes(array('category_id' => 4));
        return $this->render('_technology' , [
            'models' => $models,
            'item' => $item,

        ]);
    }

    public function getViewPath($checkTheme = false)
    {
        return Yii::getPathOfAlias('application.widgets.technology');
    }

}
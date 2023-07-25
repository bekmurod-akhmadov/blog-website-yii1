<?php


class Aside extends CWidget
{
    public function run()
    {
       return $this->render('_aside');
    }

    public function getViewPath($checkTheme = false)
    {
        return  Yii::getPathOfAlias('application.widgets.aside');
    }

}
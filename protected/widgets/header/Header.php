<?php


class Header extends CWidget
{
    public function run(){
        $socials = Social::model()->findAllByAttributes(array('status' => 1));
        $models = Menu::model()->findAllByAttributes(array('status' => 1,'position'=> 1 , 'parent' => NULL));
        return $this->render('_header' , [
            'models' => $models,
            'socials' => $socials,
        ]);
    }

    public function getViewPath($checkTheme = false)
    {
        return Yii::getPathOfAlias('application.widgets.header');
    }

}
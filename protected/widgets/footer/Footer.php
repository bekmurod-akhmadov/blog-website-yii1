<?php


class Footer extends  CWidget
{
    public function run(){
        $socials = Social::model()->findAllByAttributes(array('status' => 1));
        $models = News::model()->findAllBySql("select * from news where status = 1 order by created_at desc limit 3");
        return $this->render('_footer' , [
            'socials' => $socials,
            'models' => $models,

        ]);
    }
     public function getViewPath($checkTheme = false)
     {
         return Yii::getPathOfAlias('application.widgets.footer');
     }

}
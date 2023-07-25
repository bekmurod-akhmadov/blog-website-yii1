<?php

class DefaultController extends Controller
{
    public $layout = 'admin';

    public function accessRules()
    {
        return array(
            array('deny',  // allow all users to perform 'index' and 'view' actions

                'users'=>array('?'),
            ),

        );
    }

	public function actionIndex()
	{
		$this->render('index');
	}


}
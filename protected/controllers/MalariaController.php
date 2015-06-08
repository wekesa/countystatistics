<?php

class MalariaController extends Controller
{
    /* a function to display/render default malaria page*/
	public function actionIndex()
	{
		$this->render('index');
	}
    /* a function to display/render default malaria page*/
    public function actionCharts()
    {
        $this->render('chart');

    }


    // Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
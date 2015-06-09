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

}
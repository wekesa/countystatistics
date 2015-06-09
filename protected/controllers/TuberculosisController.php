<?php

class TuberculosisController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	/*function to render tuberculosis chart view*/
	public function actionTuberchart()
	{
		$this->render('tuberchart');
	}
}
<?php

class TuberculosisController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	/*function to render tuberculosis chart view*/
	public function actionTubercharts()
	{
		$this->render('tuberchart');
	}
}
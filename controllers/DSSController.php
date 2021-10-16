<?php

class DSSController extends Controller
{
	public function actionIndex()
	{
		$model = new dSS;
		if(isset($_POST['dSS']))
		{
			$model->attributes=$_POST['dSS'];
			if($model->validate())
			{
				$model->calculate();
				$this->render('selection',array('model'=>$model));
			}
			else{
				$this->render('index',array('model'=>$model));
			}
		}
		else{
			$this->render('index',array('model'=>$model));
		}
	}

	public function actionSelection()
	{
		$this->render('selection');
	}

	public function actionPick()
	{
		$this->render('selection');
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
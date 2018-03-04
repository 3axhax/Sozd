<?php

use controllers\SiteController;
use models\Task33;

class Task33Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 3.3');
        return $this->render('task/task33');
    }
    public function actionCalculate()
    {
        $ans = new Task33($_REQUEST['number1'], $_REQUEST['operator'], $_REQUEST['number2']);
        if ($ans->validate()) $ans->calculate();
        $res = json_encode($ans->report, JSON_UNESCAPED_UNICODE);
        echo $res;
        return true;
    }
}
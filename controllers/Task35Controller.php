<?php

use controllers\SiteController;
use models\Task35;

class Task35Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 3.5');
        return $this->render('task/task35');
    }
    public function actionCalculate()
    {
        $angel = new Task35($_REQUEST['minutes'], $_REQUEST['hours']);
        if ($angel->validate()) $angel->calculate();
        $res = json_encode($angel->report, JSON_UNESCAPED_UNICODE);
        echo $res;
        return true;
    }
}
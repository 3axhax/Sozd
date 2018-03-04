<?php

use controllers\SiteController;
use models\Task32;

class Task32Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 3.2');
        return $this->render('task/task32');
    }
    public function actionTransform()
    {
        $date = new Task32($_REQUEST['number'], $_REQUEST['month']);
        if ($date->validate()) $date->transform();
        $res = json_encode($date->report, JSON_UNESCAPED_UNICODE);
        echo $res;
        return true;
    }
}
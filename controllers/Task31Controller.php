<?php

use controllers\SiteController;
use models\Task31;

class Task31Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 3.1');
        return $this->render('task/task31');
    }
    public function actionCount()
    {
        $total = new Task31($_REQUEST['amount'], $_REQUEST['time'], $_REQUEST['percent']);
        if($total->validate()) $total->countTotal();
        $res = json_encode($total->report, JSON_UNESCAPED_UNICODE);
        echo $res;
        return true;
    }
}
<?php

use controllers\SiteController;

class Task21Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 2.1');
        return $this->render('task/task21');
    }
}
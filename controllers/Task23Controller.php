<?php

use controllers\SiteController;

class Task23Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 2.3');
        return $this->render('task/task23');
    }
}
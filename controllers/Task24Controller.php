<?php

use controllers\SiteController;

class Task24Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 2.4');
        return $this->render('task/task24');
    }
}
<?php

use controllers\SiteController;

class Task22Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 2.2');
        return $this->render('task/task22');
    }
}
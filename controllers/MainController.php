<?php

use controllers\SiteController;


class MainController extends SiteController
{
    public function actionIndex()
    {
        return $this->render('main/index');
    }
}
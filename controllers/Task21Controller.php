<?php

use controllers\SiteController;

class Task21Controller extends SiteController
{
    public function actionIndex()
    {
        $this->setTitle('Задание № 2.1');
        return $this->render('task/task21');
    }
    public function actionShow()
    {
        $content ='';
        for($i=8; $i<12; $i++)
        {
            $content .= '<div class="catalog__item">
        <div class="catalog__item--inner">
            <h3>Lorem ipsum '.$i.'</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
    </div>';
        }
        echo $content;
        return true;
    }
}
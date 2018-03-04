<?php

use controllers\SiteController;
use models\Task34;

class Task34Controller extends SiteController
{
    public function actionIndex()
    {
        $fileList = Task34::getFileList();
        $this->setTitle('Задание № 3.4');
        return $this->render('task/task34', ['fileList' => $fileList]);
    }
    public function actionSave()
    {
        if ($_FILES['imgFile']['error'] > 0) echo '{"file": "Ошибка загрузки файла"}';
        else
        {
            move_uploaded_file($_FILES['imgFile']['tmp_name'], ROOT.'/lib/img/'.$_FILES['imgFile']['name']);
            echo '{"answer": "Файл загружен"}';
        }
        return true;
    }
}
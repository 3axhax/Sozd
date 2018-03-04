<?php

namespace models;


class Task34
{
    static public $ext = ['jpg', 'jpeg', 'png', 'bmp'];

    public static function getFileList()
    {
        $fileList = array();
        $files = scandir(ROOT . '/lib/img');
        foreach ($files as $file)
        {
            $fileExt = new \SplFileInfo($file);
            if (in_array($fileExt->getExtension(), self::$ext)) $fileList[] = $file;
        }
        return $fileList;
    }
}
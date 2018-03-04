<?php

namespace models;


class Task32
{
    private $dateMonth = ['month' => [
        '1' => 'января',
        '2' => 'февраля',
        '3' => 'марта',
        '4' => 'апреля',
        '5' => 'мая',
        '6' => 'июня',
        '7' => 'июля',
        '8' => 'августа',
        '9' => 'сентября',
        '10' => 'октября',
        '11' => 'ноября',
        '12' => 'декабря',
    ]];
    public $report = false;
    public $number;
    public $month;
    
    public function __construct($number, $month)
    {
        $this->number = $number;
        $this->month = $month;
    }
    public function validate()
    {
        $number = $this->validateNumber($this->number);
        $month = $this->validateMonth($this->month);
        return ($number && $month);
    }
    private function validateNumber($number)
    {
        if (!$number) {
            $this->report['number'] = 'Поле должно быть заполнено';
            return false;
        }
        if (!is_numeric($number))
        {
            $this->report['number'] = 'Поле должно быть числом';
            return false;
        }
        if (!is_int(0+$number))
        {
            $this->report['number'] = 'Поле должно быть целым числом';
            return false;
        }
        if (($number < 1) || ($number >31))
        {
            $this->report['number'] = 'Поле должно быть числом от 1 до 31';
            return false;
        }
        return true;
    }
    private function validateMonth($month)
    {
        if (!$month) {
            $this->report['month'] = 'Поле должно быть заполнено';
            return false;
        }
        if (!is_numeric($month))
        {
            $this->report['month'] = 'Поле должно быть числом';
            return false;
        }
        if (!is_int(0+$month))
        {
            $this->report['month'] = 'Поле должно быть целым числом';
            return false;
        }
        if (($month < 1) || ($month >12))
        {
            $this->report['month'] = 'Поле должно быть числом от 1 до 12';
            return false;
        }
        return true;
    }
    public function transform()
    {
        $date = $this->number.' '.$this->dateMonth['month'][$this->month];
        $this->report['date'] = $date;
        return true;
    }
}
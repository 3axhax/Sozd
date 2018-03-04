<?php

namespace models;


class Task33
{
    public $report = false;
    public $number1;
    public $operator;
    public $number2;
    
    public function __construct($number1, $operator, $number2)
    {
        $this->number1 = $number1;
        $this->operator = $operator;
        $this->number2 = $number2;
    }
    public function validate()
    {
        $number1 = $this->validateNumber1($this->number1);
        $number2 = $this->validateNumber2($this->number2);
        return ($number1 && $number2);
    }
    private function validateNumber1($number1)
    {
        if (!$number1) {
            $this->report['number1'] = 'Поле должно быть заполнено';
            return false;
        }
        if (!is_numeric($number1))
        {
            $this->report['number1'] = 'Поле должно быть числом';
            return false;
        }
        return true;
    }
    private function validateNumber2($number2)
    {
        if (!$number2) {
            $this->report['number2'] = 'Поле должно быть заполнено';
            return false;
        }
        if (!is_numeric($number2))
        {
            $this->report['number2'] = 'Поле должно быть числом';
            return false;
        }
        return true;
    }
    public function calculate()
    {
        switch ($this->operator)
        {
            case 'plus':
                $ans = $this->number1 + $this->number2;
                break;
            case 'minus':
                $ans = $this->number1 - $this->number2;
                break;
            case 'divide':
                $ans = $this->number1 / $this->number2;
                break;
            case 'multiply':
                $ans = $this->number1 * $this->number2;
                break;
            default:
                $ans = 'Ошибка!';
        }
        $this->report['answer'] = $ans;
        return true;
    }
}
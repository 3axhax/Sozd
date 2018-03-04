<?php

namespace models;


class Task31
{
    public $report = false;
    public $amount;
    public $time;
    public $percent;
    
    public function __construct($amount, $time, $percent)
    {
        $this->amount = $amount;
        $this->time = $time;
        $this->percent = $percent;
    }
    public function validate()
    {
        $amount = $this->validateAmount($this->amount);
        $time = $this->validateTime($this->time);
        $percent = $this->validatePercent($this->percent);
        return ($amount && $time && $percent);
    }
    private function validateAmount($amount)
    {
        if (!$amount) {
            $this->report['amount'] = 'Поле должно быть заполнено';
            return false;
        }
        if (!is_numeric($amount))
        {
            $this->report['amount'] = 'Поле должно быть числом';
            return false;
        }
        return true;
    }
    private function validateTime($time)
    {
        if (!$time) {
            $this->report['time'] = 'Поле должно быть заполнено';
            return false;
        }
        if (!is_numeric($time))
        {
            $this->report['time'] = 'Поле должно быть числом';
            return false;
        }
        return true;
    }
    private function validatePercent($percent)
    {
        if (!$percent) {
            $this->report['percent'] = 'Поле должно быть заполнено';
            return false;
        }
        if (!is_numeric($percent))
        {
            $this->report['percent'] = 'Поле должно быть числом';
            return false;
        }
        return true;
    }
    public function countTotal()
    {
        $total = $this->amount+(($this->amount*$this->percent/100)*$this->time/12);
        $this->report['total'] = round($total, 2);
        return true;
    }
}
<?php

namespace models;


class Task35
{
    public $report = false;
    public $minutes;
    public $hours;
    
    public function __construct($minutes, $hours)
    {
        $this->minutes = $minutes;
        $this->hours = $hours;
    }
    public function validate()
    {
        $minutes = $this->validateMinutes($this->minutes);
        $hours = $this->validateHours($this->hours);
        return ($minutes && $hours);
    }
    private function validateMinutes($minutes)
    {
        if (!$minutes) {
            if ($minutes != 0) {
                $this->report['minutes'] = 'Поле должно быть заполнено';
                return false;
            }
        }
        if (!is_numeric($minutes)) {
            $this->report['minutes'] = 'Поле должно быть числом';
            return false;
        }
        if (($minutes < 0) || ($minutes >60)) {
            $this->report['minutes'] = 'Поле должно быть числом от 0 до 60';
            return false;
        }
        return true;
    }
    private function validateHours($hours)
    {
        if (!$hours) {
            if ($hours != 0) {
                $this->report['hours'] = 'Поле должно быть заполнено';
                return false;
            }
        }
        if (!is_numeric($hours)) {
            $this->report['hours'] = 'Поле должно быть числом';
            return false;
        }
        if (($hours < 0) || ($hours >12)) {
            $this->report['hours'] = 'Поле должно быть числом от 0 до 12';
            return false;
        }
        return true;
    }
    public function calculate()
    {
        $minutesDeg = 360/60*$this->minutes;
        $hoursDeg = 360/12*$this->hours;
        $this->report['answer'] = abs(($minutesDeg-$hoursDeg) % 360);
        return true;
    }
}
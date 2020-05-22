<?php
require_once 'classes/Person.php';

Class Admin extends Person
{
    protected $working_day = "";

    public function __construct($id, $full_name, $phone, $email, $role, $working_day)
    {
        parent::__construct($id, $full_name, $phone, $email, $role);
        $this->working_day = $working_day;
    }

    public function getWorkingDay()
    {
        return $this->working_day;
    }

     public function getVisitCard()
    {
        $str = '';
        $str .= parent::getVisitCard();
        $str .= '<h5>Working_day:'.' ' . $this->getWorkingDay() . '</h5>';
        $str .= '';
        return $str;
    }

}
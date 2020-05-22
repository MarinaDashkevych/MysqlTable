<?php
require_once 'classes/Person.php';

Class Student extends Person {
    protected $averange_mark = 0;

    public function __construct($id, $full_name, $phone, $email, $role, $averange_mark)
    {
        parent::__construct($id, $full_name, $phone, $email, $role);
        $this->averange_mark = $averange_mark;
    }

    public function getAverangeMark()
    {
        return $this->averange_mark;
    }


    public function getVisitCard()
    {
        $str = '';
        $str .= parent::getVisitCard();
        $str .= '<h5>Averange_mark:'.' ' . $this->getAverangeMark() . '</h5>';
        $str .= '';
        return $str;
    }


}

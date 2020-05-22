<?php
require_once 'classes/Person.php';

Class Teacher extends Person {
    protected $subject = "";

    public function __construct($id, $full_name, $phone, $email, $role, $subject)
    {
        parent::__construct($id, $full_name, $phone, $email, $role);
        $this->subject  = $subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }


    public function getVisitCard()
    {
        $str = '';
        $str .= parent::getVisitCard();
        $str .= '<h5>Subject:'.' ' . $this->getSubject() . '</h5>';
        $str .= '';
        return $str;
    }




}
<?php
Class Person
{
    protected $full_name = "";
    protected $phone = 0;
    protected $email = "";
    protected $role = "";

    public function __construct($id, $full_name, $phone, $email, $role)
    {
        $this->id =$id;
        $this->full_name = $full_name;
        $this->phone = $phone;
        $this->email = $email;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getFullName()
    {
        return $this->full_name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRole()
    {
        return $this->role;
    }


     public function getVisitCard()
    {
        $str = '';
        $str .= '<h5>ID:'.' ' . $this->getId() . '</h5>';
        $str .= '<h5>Full_name:'.' ' . $this->getFullName() . '</h5>';
        $str .= '<h5>Email:'.' ' . $this->getEmail() . '</h5>';
        $str .= '<h5>Phone:'.' ' . $this->getPhone() . '</h5>';
        $str .= '<h5>Role:'.' ' . $this->getRole() . '</h5>';
        return $str;
    }

}


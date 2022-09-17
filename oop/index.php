<?php 
class Person
{
    private $username;
    private $email;
    public function __construct($username,$email)
    {
        $this->setUsername($username);
        $this->setEmail($email);
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setUsername($username)
    {
        $this->username=$username;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
}

$userOne = new Person("Ali",'Ali@gmail.com');
echo $userOne->getEmail();
?>
<?php
declare(strict_types= 1);
class User{
    public string $user;
    public string $password;
    public string $name;
    public function __construct(string $user, string $name, string $password){
        $this->user = $user;
        $this->name = $name;
        $this->password = $password;
    }
}

class Teacher extends User{
    public string $subject;
    public function __construct(string $subject, string $name, string $user, string $password){
        $this->subject = $subject;
        parent::__construct($user, $name, $password);
    }
}
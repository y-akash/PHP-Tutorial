<?php
    class User{

        private $username;
        private $email;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        //GETTER METHOD
        public function getUser(){
            return "UserName= $this->username  Email= $this->email";
        }

        //SETTER METHOD
        public function setUsername($username){
            $this->username=$username;
        }

        //SETTER METHOD
        public function setEmail($email){
            $this->email=$email;
        }

    }


    class AdminUser extends User{
        private $level;

        function __construct($username, $email, $level){
            $this->level=$level;
            parent::__construct($username, $email);             //Similar to super;
        }
        
        // function getLevel(){
        //     echo "Level= $this->level <br>";
        // }

        //OVERRIDE getUser() Method.
        public function getUser(){
            return parent::getUser() . "level= $this->level";
        }
    }

    //USERONE
    $userOne = new User('i_am_akash','akash@gmail.com');
    echo $userOne->getUser() . "<br>";

    //USERTWO
    $userTwo = new AdminUser('admin','admin@gmail.com',3);
    echo $userTwo->getUser() . "<br>";

    // $userTwo->getLevel();


?>
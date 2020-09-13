<?php
    class User{

        // public $username;
        // public $email;

        // **********CONSTRUCTOR**********
        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        //If public is not written than it will assume that the function is public ??????        
        public function userDetials(){
            echo "UserName= $this->username <br> Email= $this->email";
        }


    }

    $userOne=new User('i_am_akash','akash@gmail.com');

    // echo $userOne->username;
    // echo $userOne->email;

    $userOne->userDetials();

?>
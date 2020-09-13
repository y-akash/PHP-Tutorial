<!-- We can't access private property or method outside of class but we can use them inside of class.-->
<!-- child class cannot access private property or method of parent class from it's own class. -->

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
            echo "UserName= $this->username  Email= $this->email <br>";
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

    $userOne=new User('i_am_akash','akash@gmail.com');

    // If we try to access private property or method outside of class than it will give error.
    // echo $userOne->username;
    // echo $userOne->email;

    $userOne->getUser();

    //We can use getter or setter method to access or change the property respectively.
    $userOne->setUsername('akash1998');
    $userOne->getUser();

?>